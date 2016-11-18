<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseProgram', function (Blueprint $table) {
            $table->increments('composite_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('program_id');
            $table->string('course_type');
            //$table->primary(array('course_id', 'program_id'));
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('program_id')->references('program_id')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courseProgram');
    }
}
