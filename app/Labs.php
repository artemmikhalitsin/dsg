<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    public $primaryKey = 'lab_id';

    // lists the lecture associated with the lab
    public function lecture()
    {
    	return $this->belongsTo('App\Lectures', 'lecture_id', 'lecture_id');
    }
}
