<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('name_id')->references('id')->on('names');
            $table->timestamp('startTime')->default()->nullable();
            $table->timestamp('endTime')->default()->nullable();
            $table->timestamp('totalTimeWorked')->default()->nullable();
            $table->timestamp('hoursLeftBeforeTimeOut')->default()->nullable();
            $table->timestamp('totalBreaks')->default()-nullable();
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
        Schema::dropIfExists('timer');
    }
}
