<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    public $primaryKey = 'semester_id';

    // lists all the lectures 
    public function lectures()
    {
    	return $this->hasMany('App\Lectures', 'semester_id');
    }
}
