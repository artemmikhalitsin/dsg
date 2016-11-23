<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
     public $primaryKey = 'preference_id';

     protected $fillable = [
     	'days_off',
     	'starting_time',
     	'finishing_time',
     	'course_load',
     	'user_id'
     ];

     public $timestamps = false;

     // lists the user's info to whome a preference belongs to
     public function user()
     {
          return $this->belongsTo('App\User');
     }
}
