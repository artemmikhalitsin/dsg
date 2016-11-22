<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
     protected $fillable = [];
     // lists the user's info to whome a preference belongs to
     public function user()
     {
          return $this->belongsTo('App\User');
     }
}
