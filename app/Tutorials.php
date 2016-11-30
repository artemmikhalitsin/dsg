<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorials extends Model
{
    public $primaryKey = 'tutorial_id';

    // lists the lecture associated with a tutotial
    public function lecture()
    {
    	return $this->belongsTo('App\Lectures', 'lecture_id', 'lecture_id');
    }

    public function getCourse()
    {
         return $this->lecture->course;
    }
}
