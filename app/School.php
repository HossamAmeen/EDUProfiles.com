<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  protected  $fillable = ['name', 'location', 'email' ,'password',
   'license_number', 'about',
    'history', 'services' ,'supplies', 'type' ,'paper_required' ,'community' ,
    'website_link', 'contact',
     'enrollment', 'grading_scale' ,'activities', 'misssion', 'cademic_program',
      'administration_team',
     'register_team', 'teachers', 'achievement' ,'courses' ,'contract', 'photo'];
}
