<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrPrerequisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orPrerequisites', function (Blueprint $table) {
            $table->increments('orprereq_id');
            $table->unsignedInteger('prereq_id');
            $table->unsignedInteger('course_id');
            //$table->primary(array('course_id', 'prereq_id'));
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('prereq_id')->references('prereq_id')->on('prerequisites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orPrerequisites');
    }
}
