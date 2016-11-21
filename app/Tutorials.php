<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorials extends Model
{
    public $primaryKey = 'tutorial_id';

    public function lecture()
    {
    	return $this->belongsTo('App\Lectures', 'lecture_id', 'lecture_id');
    }
}
