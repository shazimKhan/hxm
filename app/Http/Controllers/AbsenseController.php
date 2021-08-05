<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenseController extends Controller
{
    //
    public function absenses(Request $request, $id)
    {
        //
         
         $data =$request->all();
         $resp  = DB::table('absense')->insert($data);
         return  $this->response->success('data  insertedSuccessfully',[]);
    }


    public function getAbsenses()
    {
        //
         $resp  = DB::table('absense')->get();
         return  $resp;
    }
    
}
