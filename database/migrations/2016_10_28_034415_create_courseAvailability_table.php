<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseAvailability', function (Blueprint $table) {
            $table->increments('availability_id');
            $table->unsignedInteger('course_id');
            $table->boolean('fall');
            $table->boolean('winter');
            //$table->primary(array('course_id', 'semester_id'));
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courseAvailability');
    }
}
