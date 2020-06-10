<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStudent extends Model
{
    protected $table = "bus_students";

    public function student()
    {
        return $this->belongsTo(Student::class , 'student_id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class , 'bus_id');
    }
}
