<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use DB;

class ExcelImportData implements ToCollection
{   
    // @param Collection $collection
    
    public function collection(Collection $collection)
    {
        $table_name = ''; 
        // dd('Testing', $collection);
        // foreach ($collection as $key => $value)  
        // {
        //     DB::table('picklist')->insert(
        //         [
        //             'picklist_code' => $value[0],
        //             'picklist_effective_start_date' => Carbon::createFromFormat('d/m/Y', '01/01/1900')->format('Y/m/d'),
        //             // 'picklist_effective_start_date' => $value[1],
        //             'external_code' => $value[2],
        //             'non_unique_external_code' => $value[3],
        //             'picklist_value_external_code' => $value[4],
        //             'name' => $value[5],
        //             'status' => $value[6]
        //         ]
        //     ); 
        // }

        // foreach ($collection as $key => $value)  
        // {
        //     if($key>0)
        //     {
        //         // dd('Testing', $collection);
        //         DB::table('formtemplate')->insert(
        //             [
        //                 'formName' => $value[0],
        //                 'type' => $value[1],
        //                 'inputType' => $value[2],
        //                 'min' => $value[3],
        //                 'values' => $value[4],
        //                 'label' => $value[5],
        //                 'placeholder' => $value[6],
        //                 'textOn' => $value[7],
        //                 'textOff' => $value[8],
        //                 'required' => $value[9],
        //                 'readonly' => $value[10],
        //                 'disabled' => $value[11],
        //             ]
        //         ); 
        //     }   
        // }


        foreach ($collection as $key => $value)  
        {
            if($key==0)
            {     
                $table_name = $value[0];
            }

            if($key>1)
            {
                // dd('Testing', $collection);

                // DB::table('form')->insert(
                //     [
                //         'formName' => $table_name,
                //         'type' => $value[4],
                //         'inputType' => $value[5],
                //         'min' => $value[3],
                //         'values' => $value[9],
                //         'label' => $value[1],
                //         'placeholder' => $value[7],
                //         'required' => $value[9],
                //         'readonly' => $value[11],
                //         'disabled' => $value[12],
                //     ]
                // ); 
            }   
        }

        foreach ($collection->toArray() as $key => $value)  
        { 
            if($key==0)
            {     
                $table_name = $value[0];
            }

            $attributes = DB::getSchemaBuilder()->getColumnListing($table_name);
            $arr = array_splice($attributes,0, -2);
            // dd($arr);
            
            if($key>1)
            {
                // dd('Testing', $collection);
                $columns = implode(', ',$arr);
                $values = implode(', ',$value);  

                // INSERT INTO table_name (column1, column2, column3,...)
                // VALUES (value1, value2, value3,...)

                $query = "INSERT INTO $table_name ($columns) VALUES ($values)";
                // echo $query; 

                DB::INSERT($query);
                
                // DB::table($table_name)->insert(
                //     [
                //         $columns => $values
                //     ]
                // );

                
            }   
        }


    }

}
