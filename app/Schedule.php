<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'user_id', 'lecture_id', 'tutorial_id', 'lab_id', 'course_id', 'semester_id'
    ];

    public $primaryKey = 'schedule_id';

    protected $table = 'schedule';

    public $timestamps = false;
}
