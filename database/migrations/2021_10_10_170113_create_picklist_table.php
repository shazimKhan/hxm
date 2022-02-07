<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picklist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picklist_code');
            $table->date('picklist_effective_start_date');
            $table->string('external_code');
            $table->string('non_unique_external_code');
            $table->string('picklist_value_external_code')->nullable();
            $table->string('name');
            $table->char('status', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picklist');
    }
}
