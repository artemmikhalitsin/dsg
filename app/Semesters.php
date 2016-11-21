<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    public $primaryKey = 'semester_id';

    public function lectures()
    {
    	return $this->hasMany('App\Lectures', 'semester_id');
    }
}
