<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uniform extends Model
{
    protected $fillable = ['image','category' ,'type', 'size' ,'color' ,'available', 'quantity', 'school_id'];
}
