<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HolidayCalender;
class HolidayController extends Controller
{
    //
    public function saveHolidayCalender(Request $request)
    {
        //
         
         $data =$request->all();
         $resp  =HolidayCalender::create($data);
         return  response()->json(['message'=>'insertedSuccessfully','data'=>$resp]);
    }
}