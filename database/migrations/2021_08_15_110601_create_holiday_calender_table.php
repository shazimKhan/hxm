<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayCalenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday_calender', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('external_code');
            $table->dateTime('date_of_holiday');
            $table->string('holiday_class');
            $table->string('holiday_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holiday_calender');
    }
}
