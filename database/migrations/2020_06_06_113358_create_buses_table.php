<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('details');
            $table->string('number');
            $table->string('routes');
            $table->string('Super_visor_name');
            $table->string('Super_visor_number');
            $table->string('driver_name');
            $table->string('driver_number');
            $table->integer('number_available');
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
        Schema::dropIfExists('buses');
    }
}
