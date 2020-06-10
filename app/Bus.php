<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['details' ,'number' ,'routes',
     'Super_visor_name', 'Super_visor_number' ,'driver_name', 'driver_number' ,'number_available' , 'school_id'];
}
