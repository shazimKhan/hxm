<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Grid2;
use App\Http\Requests\HolidayLeaveRequest;


class Grid2Controller extends Controller
{
    public function getHolidayCalender()
    {
         $resp  =HolidayCalender::all();
         return  response()->json(['message'=>'get Calendar','data'=>$resp]);
    }
}
