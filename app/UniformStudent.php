<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniformStudent extends Model
{
    protected $table = "uniform_students";
    public function uniform()
    {
        return $this->belongsTo(Uniform::class , "uniform_id");
    }
    public function student()
    {
        return $this->belongsTo(Student::class , 'student_id');
    }

  
}
