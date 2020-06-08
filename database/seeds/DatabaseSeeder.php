<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

       
        \App\Student::create([
           'email' =>'student@gmail.com' ,
           'password' => bcrypt('student@gmail.com'),
        ]);
        \App\School::create([
            'email' =>'school@gmail.com' ,
           'password' => bcrypt('school@gmail.com'),
          
        ]);
    
 

    }
}
