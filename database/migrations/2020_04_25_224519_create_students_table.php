<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ///// first_name gender last_name place second_name birth_date age nationality religion classlevel email address password SSN gridRadios ContactEmail  addressEgypt Status separate_addresses
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('last_name')->nullable();
            $table->string('place')->nullable();
            $table->string('second_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('classlevel')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->string('SSN')->nullable();
            $table->string('gridRadios')->nullable();
            $table->string('ContactEmail')->nullable();
            $table->string('addressEgypt')->nullable();
            $table->string('Status')->nullable();
            $table->string('separate_addresses')->nullable();
            ///////////// Firstname Surname Lastname Nationality Religion_f Mobile City E_Mail Occupation SSN_f
            $table->string('Firstname')->nullable();
            $table->string('Surname')->nullable();
            $table->string('Lastname')->nullable();
            $table->string('Nationality_f')->nullable();
            $table->string('Religion_f')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('City')->nullable();
            $table->string('E_Mail')->nullable();
            $table->string('Occupation')->nullable();
            $table->string('SSN_f')->nullable();
            ///////////////////    Firstname_m Surname_m Lastname_m Nationality_m Religion_m Mobile_m  City_m E_Mail_m  Occupation_m SSN_m
            $table->string('Firstname_m')->nullable();
            $table->string('Surname_m')->nullable();
            $table->string('Lastname_m')->nullable();
            $table->string('Nationality_m')->nullable();
            $table->string('Religion_m')->nullable();
            $table->string('Mobile_m')->nullable();
            $table->string('City_m')->nullable();
            $table->string('E_Mail_m')->nullable();
            $table->string('Occupation_m')->nullable();
            $table->string('SSN_m')->nullable();
            /////////// silibings_number silibings medical_information_text medical_information_image activities activities_image
            $table->string('silibings_number')->nullable();
            $table->string('silibings')->nullable();
            $table->string('medical_information')->nullable();
            $table->text('medical_information_text')->nullable();
            $table->string('medical_information_image')->nullable();
            /////////////////////

            $table->string('School')->nullable();
            $table->string('Grade')->nullable();
            $table->string('Curriculum')->nullable();
            $table->string('Location')->nullable();
            $table->string('School2')->nullable();
            $table->string('Grade2')->nullable();
            $table->string('Curriculum2')->nullable();
            $table->string('Location2')->nullable();
            $table->string('School3')->nullable();
            $table->string('Grade3')->nullable();
            $table->string('Curriculum3')->nullable();
            $table->string('Location3')->nullable();
            $table->string('historical')->nullable();
            $table->string('Statement_enrolment')->nullable();
            $table->string('Transfer')->nullable();
            $table->string('transfers')->nullable();
            $table->string('Printout')->nullable();
            /////////////////////  passport birth_certificate guardian_passport objection_letter
            $table->string('passport')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('guardian_passport')->nullable();
            $table->string('objection_letter')->nullable();
            ///////////////// Enrolment degree entrance
            $table->string('Enrolment')->nullable();
            $table->string('degree')->nullable();
            $table->string('entrance')->nullable();
            ////////////////////////
            $table->text('activities')->nullable();
            $table->string('activities_image')->nullable();
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
        Schema::dropIfExists('students');
    }
}
