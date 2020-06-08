<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = ['test' ,'date', 'time', 'Test_data', 'Test_time',
     'instructor_name', 'place' , 'student_id' , 'school_id'];

     public function school()
     {
         return $this->belongsTo(School::class , 'school_id');
     }
}
