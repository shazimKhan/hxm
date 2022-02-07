<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkSchedule;
use Illuminate\Support\Facades\DB;

class WorkScheduleController extends Controller
{
    public function saveWorkSchedule(Request $request)
    {

        $data =$request->all();
        // return $data;
         $resp  = WorkSchedule::create($data);
         return  response()->json(['message'=>'insertedSuccessfully','data'=>$resp]);
    }
    
}
