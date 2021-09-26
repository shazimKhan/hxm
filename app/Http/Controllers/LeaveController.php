<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;
use App\Models\EmployeeLeave;

class LeaveController extends Controller
{
    //
    public function getLeavesType(){
        $leaveTypes = LeaveType::all();
        return response()->json(['message'=>'Get Leave Type','data'=>$leaveTypes]);
    }
    public function applyLeave(Request $request)
    {
         $user = auth('api')->user();
         $data = $request->all();
         $resp = EmployeeLeave::create([
             'user_id'=>$user->id,
             'manager_id'=>0,
             'leave_type_id'=>$data['leaveTypeId'],
             'date_from'=>$data['dateFrom'],
             'date_to'=>$data['dateTo'],
             'from_time'=>'12:50:12',
             'to_time'=>'12:50:12',
             'days'=>$data['days'],
             'status'=>false,
             'reason'=>$data['reason'],
             'remarks'=>$data['reason']
            ]);
         return  response()->json(['status'=>true,'message'=>'Apply Leave successfully']);
    }
    public function getAllLeaves(Request $request)
    {
         $resp  =EmployeeLeave::with('leaveType')->get();
         return  response()->json(['status'=>true,'message'=>'Get All Leaves','data'=>$resp]);
    }
}
