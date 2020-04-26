<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected  $fillable = [
    'first_name', 'gender', 'last_name', 'place', 'second_name',
     'birth_date', 'age', 'nationality' ,'religion' ,'classlevel', 'email', 'address',
     'password', 'SSN', 'gridRadios', 'ContactEmail',  'addressEgypt', 'Status',
      'separate_addresses' ,'Firstname' ,'Surname' ,'Lastname' ,'Nationality_f', 'Religion_f',
       'Mobile' ,'City' ,'E_Mail', 'Occupation', 'SSN_f',
    'Firstname_m' ,'Surname_m' ,'Lastname_m', 'Nationality_m', 'Religion_m', 'Mobile_m',
     'City_m', 'E_Mail_m',  'Occupation_m' ,'SSN_m',
    'silibings_number', 'silibings' ,'medical_information_text' ,'medical_information_image',
    'activities' ,'activities_image',

        'School', 'Grade' ,'Curriculum' ,'Location',
        'School2', 'Grade2', 'Curriculum2' ,'Location2',
        'School3' ,'Grade3' ,'Curriculum3', 'Location3', 'historical' ,
        'Statement_enrolment',
        'Transfer', 'transfers', 'Printout',
        'passport', 'birth_certificate', 'guardian_passport' ,'objection_letter',
        'Enrolment', 'degree', 'entrance',
        'activities', 'activities_image'
  ];
}
