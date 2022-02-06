<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->string('number')->nullable();
            $table->string('qualification')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->tinyInteger('formalities')->nullable();
            $table->tinyInteger('offer_acceptance')->nullable();
            $table->string('probation_period')->nullable();
            $table->date('date_of_confirmation')->nullable();
            $table->string('department')->nullable();
            $table->string('salary')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('pf_account_number')->nullable();
            $table->string('un_number')->nullable();
            $table->tinyInteger('pf_status')->nullable();
            $table->date('date_of_resignation')->nullable();
            $table->string('notice_period')->nullable();
            $table->date('last_working_day')->nullable();
            $table->tinyInteger('full_final')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('employees');
    }
}
