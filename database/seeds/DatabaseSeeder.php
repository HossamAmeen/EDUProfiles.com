<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

        \App\Models\User::create([
            'full_name'=> 'admin',
            'email' => 'asd@asd.asd',
            'password' => bcrypt('admin'),
            'user_name' => "admin",
            'phone' => "01010079798",
           'image' => " ",
            'role' => 1,
        ]);

    
 

    }
}
