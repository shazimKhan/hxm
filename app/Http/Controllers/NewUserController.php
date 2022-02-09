<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class NewUserController extends Controller
{
    //
    public function saveNewUser(Request $request)
    {

        $data =$request->all();
        // return $data;
            $data['password'] = bcrypt($data['password']);
        //  $resp  = User::create($data);
        $resp = DB::table('users')->insert($data);
         return  response()->json(['message'=>'insertedSuccessfully','data'=>$resp]);
    }
}
