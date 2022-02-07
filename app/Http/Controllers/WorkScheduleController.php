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
    
    public function getWorkSchedule()
    {
         $resp  =WorkSchedule::all();
         return  response()->json(['message'=>'get Schedule','data'=>$resp]);
    }
    public function deleteWorkSchedule(Request $request)
    {
         $workSchedule  =WorkSchedule::find($request->workschedule_id);
         $workSchedule->delete();
         return  response()->json(['message'=>'Schdeule Deleted Successfully']);
    }
}
