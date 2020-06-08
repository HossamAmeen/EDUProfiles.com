<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSchool extends Model
{
    protected $fillable = ['student_id','school_id' , 'comment'];

    public function student()
    {
        return $this->belongsTo(Student::class , 'student_id');
    }
    public function school()
    {
        return $this->belongsTo(School::class , 'school_id');
    }
}
