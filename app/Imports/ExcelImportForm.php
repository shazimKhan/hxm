<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use DB;

class ExcelImportForm implements ToCollection
{   
    // @param Collection $collection
    
    public function collection(Collection $collection)
    {
        $table_name = ''; 
        // dd('Testing', $collection);

        foreach ($collection as $key => $value)  
        {
            if($key==0)
            {     
                $table_name = $value[0];
            }

            if($key>1)
            {
                $req = null;
                if($value[9] == 'Yes'){
                    $req = 1;
                }
                else{
                    $req = 0;
                }

                // dd('Testing', $collection);
                DB::table('formtemplate')->insert(
                    [
                        'formName' => $table_name,
                        'type' => $value[5],
                        'inputType' => $value[6],
                        'min' => $value[4],
                        'max' => $value[3],
                        'values' => $value[10],
                        'label' => $value[1],
                        'placeholder' => $value[8],
                        'required' => $req,
                        'readonly' => $value[12],
                        'disabled' => $value[13],
                    ]
                ); 
            }   
        }

    }

}
