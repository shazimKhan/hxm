<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayCalender extends Model
{
    use HasFactory;
    protected $table ="holiday_calender";
    protected $guarded =[];
}
