<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           $table->bigIncrements('id')->comment = 'ID';
            $table->string('name')->comment = 'Name';
            $table->string('email')->unique()->comment = 'Email';
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment = 'Password';
            // $table->rememberToken();
            $table->timestamp('created_at')->useCurrent()->comment = 'Created_at';
            $table->timestamp('updated_at')->useCurrent()->comment = 'Updated_at';
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
