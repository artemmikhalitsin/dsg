<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('tutorial_id');
            $table->string('section');
            $table->string('day');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('place');
            $table->unsignedInteger('lecture_id');
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tutorials');
    }
}
