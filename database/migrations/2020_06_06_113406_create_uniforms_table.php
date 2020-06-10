<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('category');
            $table->string('type');
            $table->string('size');
            $table->string('color');
            $table->string('available');
            $table->integer('quantity');
            $table->integer('school_id');
           
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
        Schema::dropIfExists('uniforms');
    }
}
