<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['text','table',  'type', 'is_read' , "user_id"];
}
