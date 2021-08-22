<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HolidayCalender;
use App\Http\Requests\HolidayLeaveRequest;
class HolidayController extends Controller
{
    //
    public function saveHolidayCalender(HolidayLeaveRequest $request)
    {
        //
         $data =$request->all();
         $resp  =HolidayCalender::create($data);
         return  response()->json(['message'=>'insertedSuccessfully','data'=>$resp]);
    }
    public function getHolidayCalender()
    {
         $resp  =HolidayCalender::all();
         return  response()->json(['message'=>'get Calendar','data'=>$resp]);
    }
}