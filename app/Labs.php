<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    public $primaryKey = 'lab_id';

    public function lecture()
    {
    	return $this->belongsTo('App\Lectures', 'lecture_id', 'lecture_id');
    }
}
