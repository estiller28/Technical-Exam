<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Psr\Log\LoggerInterface;

use Illuminate\Support\Facades\DB;
class ContactImport implements  ToCollection, WithHeadingRow, WithStartRow
{

    /**
     * @param Collection $collection
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function startRow(): int
    {
        return 2;
    }
    public function Collection(Collection $collection){

        try{
            DB::beginTransaction();
            foreach ($collection as $row) {
                $data = [
                    'first_name'  => $row['title'],
                    'last_name'  => $row['company_name'],
                    'title'  => $row['first_name'],
                    'mobile_number'  => $row['mobile_number'],
                    'company_name'  => $row['last_name']
                ];
                DB::table('phone_books')->insert($data);
            }

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();

            $offset = $e;
            $message = 'Oops!, an error occured at offset {offset}';
            $context = ['offset' => $offset];
            Log::error($message, $context);
        }

    }
}
