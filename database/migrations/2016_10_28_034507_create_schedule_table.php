<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('schedule_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('lecture_id');
            $table->unsignedInteger('tutorial_id')->nullable();
            $table->unsignedInteger('lab_id')->nullable();
            //$table->primary(array('user_id', 'lecture_id'));
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures')->onDelete('cascade');
            $table->foreign('tutorial_id')->references('tutorial_id')->on('tutorials')->onDelete('cascade');
            $table->foreign('lab_id')->references('lab_id')->on('labs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schedule');
    }
}
