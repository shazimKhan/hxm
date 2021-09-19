<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApplyLeave;

class LeaveController extends Controller
{
    //
    public function ApplyLeave(ApplyLeave $request)
    {
        //
         $data =$request->all();
         $resp  =LeaveApply::create($data);
         return  response()->json(['message'=>'leave apply succesfully','data'=>$resp]);
    }
}
