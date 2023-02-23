<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Livewire\PhoneBook;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = \App\Models\PhoneBook::all();
        return response()->json(['data' => $contacts]);
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile_number' => 'required',
            'company_name' => 'required'
        ]);

        if(!$validator->passes()){
            return $validator->errors();
        }else{
            $contact = \App\Models\PhoneBook::create([
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile_number' => $request->mobile_number,
                'company_name' => $request->company_name,
            ]);

            if($contact){
                return response()->json([
                    'message' => 'Success',
                    'data' => $contact,
                ]);
            }else{
                return response()->json([
                    'message' => 'Error'
                ]);
            }
        }
    }


    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile_number' => 'required',
            'company_name' => 'required'
        ]);

        if(!$validator->passes()){
            return $validator->errors();
        }else{
            $contact = \App\Models\PhoneBook::findOrFail($id)->update([
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile_number' => $request->mobile_number,
                'company_name' => $request->company_name,
            ]);

            if($contact){
                return response()->json([
                    'message' => 'Contact successfully updated',
                    'data' => $contact,
                ]);
            }else{
                return response()->json([
                    'message' => 'Error'
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $contact = \App\Models\PhoneBook::findOrFail($id)->delete();

        if($contact){
            return response()->json([
                'message' => 'Contact successfully deleted',
                'data' => $contact,
            ]);
        }else{
            return response()->json([
                'message' => 'Error'
            ]);
        }
    }
}
