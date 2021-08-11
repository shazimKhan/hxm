<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absence;
class AbsenseController extends Controller
{
    //
    public function absenses(Request $request)
    {
        //
         
         $data =$request->all();
         $resp  =Absence::create($data);
         return  response()->json(['message'=>'insertedSuccessfully','data'=>$resp]);
    }


    public function getAbsenses()
    {
        //
         $resp  = DB::table('absense')->get();
         return  $resp;
    }
    
}
