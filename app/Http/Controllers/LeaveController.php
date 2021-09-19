<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //
    public function ApplyLeave(Request $request)
    {
        //
         $data =$request->all();
         $resp  =LeaveApply::create($data);
         return  response()->json(['message'=>'leave apply succesfully','data'=>$resp]);
    }
}
