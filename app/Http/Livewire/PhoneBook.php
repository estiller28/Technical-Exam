<?php

namespace App\Http\Livewire;

use App\Imports\ContactImport;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactImportTemplate;
use Livewire\WithFileUploads;


class PhoneBook extends Component
{
    use WithFileUploads;

    public $template, $contacts, $contact_id, $title, $first_name, $last_name, $mobile_number, $company_name;
    protected $rules = [
        'template' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->contacts = \App\Models\PhoneBook::all();
    }
    public function render(){
        return view('livewire.phone-book');
    }
    public function resetInputFields(){

    }

    public function exportTemplate()
    {
        return Excel::download(new ContactImportTemplate(), 'Import-Contact-Template.xlsx');
    }

    public function importContact(){
        $this->validate([
            'template' => 'required|mimes:xls,csv,xlsx',
        ]);

        try {
            if ($this->template) {
                $upload = Excel::import(new ContactImport(), $this->template);
                if($upload){
                    $this->dispatchBrowserEvent('swal:success', [
                        'type' => 'success',
                        'title' => 'Success',
                        'text' => 'Contacts successfully uploaded!',
                    ]);
                    $this->emit('importContact');
                    $this->mount();
                }
            }
        } catch (\Exception $e) {
            Log::error($e);
            $this->emit('importContact');
            $this->mount();
        }
    }

    public function edit($id){
        $contact = \App\Models\PhoneBook::where('id', $id)->first();
        $this->contact_id = $contact->id;
        $this->title = $contact->title;
        $this->first_name = $contact->first_name;
        $this->last_name =    $contact->last_name;
        $this->mobile_number =  $contact->mobile_number;
        $this->company_name =  $contact->company_name;
    }

    public function update(){
        $this->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile_number' => 'required|min:10|max:10',
            'company_name' => 'required',
        ]);


        try{
            if($this->contact_id){
                \App\Models\PhoneBook::find($this->contact_id)->update([
                    'title' => $this->title,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'mobile_number' =>  $this->mobile_number,
                    'company_name' =>  $this->company_name,
                ]);

                $this->dispatchBrowserEvent('swal:success', [
                    'type' => 'success',
                    'title' => 'Success',
                    'text' => 'Contacts successfully updated!',
                ]);
                $this->mount();
                $this->emit('update');
            }

        }catch (\Exception $e){
            Log::info($e);
        }
    }
}

