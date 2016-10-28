<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('lecture_id');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('instructor_id');
            $table->unsignedInteger('semester_id');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('instructor_id')->references('instructor_id')->on('instructors')->onDelete('cascade');
            $table->foreign('semester_id')->references('semester_id')->on('semesters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lectures');
    }
}
