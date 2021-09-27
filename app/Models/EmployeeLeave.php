<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LeaveType;
use App\Models\User;

class EmployeeLeave extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function leaveType(){
        return $this->hasOne(LeaveType::class,'id','leave_type_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
