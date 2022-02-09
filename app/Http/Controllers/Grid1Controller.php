<?php

namespace App\Http\Controllers;
use App\Models\Grid1;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Grid1Controller extends Controller
{
    //
    public function getWorkSchedule()
    {
         $resp  =WorkSchedule::all();
         return  response()->json(['message'=>'get Schedule','data'=>$resp]);
    }
}
