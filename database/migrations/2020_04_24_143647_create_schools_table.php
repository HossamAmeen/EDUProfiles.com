<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('license_number')->nullable();
            $table->text('about')->nullable();
            $table->text('history')->nullable();
            $table->text('services')->nullable();
            $table->text('supplies')->nullable();
            $table->text('type')->nullable();
            $table->text('paper_required')->nullable();
            $table->text('community')->nullable();
            $table->text('website_link')->nullable();
            $table->text('contact')->nullable();
            $table->text('enrollment')->nullable();
            $table->text('grading_scale')->nullable();
            $table->text('activities')->nullable();
            $table->text('misssion')->nullable();
            $table->text('cademic_program')->nullable();
            $table->text('administration_team')->nullable();
            $table->text('register_team')->nullable();
            $table->text('teachers')->nullable();
            $table->text('achievement')->nullable();
            $table->text('courses')->nullable();
            $table->string('contract')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
