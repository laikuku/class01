<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps();

            $table->string('ARRAYname');
            $table->string('CLASSROOMname');
            $table->unsignedInteger('SCHEDULEyear');
            $table->unsignedInteger('SCHEDULEmonth');
            $table->char('BORROWer');
            $table->char('CELLphone');
            $table->char('PURPOSE');
            $table->dateTime('application');
            $table->char('key_status');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
