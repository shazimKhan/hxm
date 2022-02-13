<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Response;
use App\Imports\ExcelImportTable;
use App\Imports\ExcelImportForm;
use App\Imports\ExcelImportData;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function __construct(Response $response){
        $this->response = $response;
    }
    
public function importTable(Request $request) {
        $file = $request->import_file;  
        // dd($file);

        try
        {
            Excel::import(new ExcelImportTable, $file);
        }
        catch(\PDOException $e)
        {
            // echo $e->getMessage();
            return  $this->response->success('Your file is imported successfully in database!!!', $file);
        }

        // Excel::import(new ExcelImportTable, $file);

        
        // Session::put('success', 'Your file is imported successfully in database.');
    }

    public function importForm(Request $request) {
        $file = $request->import_file;
        // dd($file);
        
       Excel::import(new ExcelImportForm, $file);
    //    Session::put('success', 'Your file is imported successfully in database.');
        echo "Your file is imported successfully in database.";
    }

    public function importData(Request $request) {
        $file = $request->import_file;
        // dd($file);
        
       Excel::import(new ExcelImportData, $file);
    //    Session::put('success', 'Your file is imported successfully in database.');
        echo "Your file is imported successfully in database.";
    }
}
