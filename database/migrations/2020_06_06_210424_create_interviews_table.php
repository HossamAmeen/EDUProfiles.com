<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('interviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('test');
            $table->string('date');
            $table->string('time');
            $table->string('Test_data');
            $table->string('Test_time');
            $table->string('instructor_name');
            $table->string('place');  
            $table->integer('school_id');
            $table->integer('student_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
