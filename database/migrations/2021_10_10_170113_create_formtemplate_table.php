<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormtemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formtemplate', function (Blueprint $table) {
            $table->increments('id');
            $table->char('formName', 45);
            $table->char('type', 15);
            $table->char('inputType', 15)->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->text('values')->nullable();
            $table->char('label');
            $table->char('placeholder')->nullable();
            // $table->char('textOn')->nullable();
            // $table->char('textOff')->nullable();
            $table->tinyInteger('required')->nullable();
            $table->tinyInteger('readonly')->nullable();
            $table->tinyInteger('disabled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formtemplate');
    }
}
