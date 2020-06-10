<?php

Route::get('/', 'HomeController@home')->name('home');

Route::get('profile-school/{id}', 'HomeController@schoolProfile')->name('profile-school');
Route::post('profile-school-update/{id}', 'HomeController@updateSchool')->name('profile-school');
Route::get('profile-school-edit/{id}', 'HomeController@editSchool')->name('profile-school');

Route::get('profile-student/{id}', 'HomeController@studentProfile')->name('profile-student');
Route::post('profile-student-update/{id}', 'HomeController@updateStudent')->name('profile-school');
Route::get('profile-student-edit/{id}', 'HomeController@editStudent')->name('profile-school');

Route::get('about-school', 'HomeController@aboutSchool');
Route::get('about-student', 'HomeController@aboutStudent');

Route::get('show-schools', 'HomeController@showSchools');

Route::any('register-school', 'HomeController@registerSchool');
Route::any('register-student', 'HomeController@registerStudent');

Route::any('login-school', 'HomeController@LoginSchool');
Route::post('login-student', 'HomeController@LoginStudent');

Route::get('send-profie/{school_id}', 'HomeController@registerInSchhool');



Route::any('add-bus', 'HomeController@addBus');
Route::any('add-uniform', 'HomeController@addUniform');



Route::any('register-student-school-status/{student_id}/{status?}', 'HomeController@updateRegisterStudent');
Route::any('interview/{studentId}', 'HomeController@interview');


Route::get('notification', 'HomeController@notification');
Route::get('get-notifications', 'HomeController@get_notification');
Route::get('students-registered', 'HomeController@students_registered');
Route::get('school-respones/{id}', 'HomeController@school_respones');

Route::get('show-reserv-uniform-school', 'HomeController@show_reserv_uniform_school');
Route::get('show-reserv-bus-school', 'HomeController@show_reserv_bus_school');
Route::get('show-reserv-bus-student', 'HomeController@show_reserv_bus_student');
Route::get('delete-reserv-bus/{id}', 'HomeController@delete_reserv_bus_student');
Route::get('show-reserv-uniform-student', 'HomeController@show_reserv_uniform_student');
Route::get('delete-reserv-uniform/{id}', 'HomeController@delete_reserv_uniform');

Route::get('logout', 'HomeController@logout');

Route::any('reserv-bus/{schoolId}/{busId?}' , 'HomeController@reserv_bus');

Route::any('show-reserv-uniform/{schoolId}', 'HomeController@show_reserv_uniform');
Route::any('choose-uniform/{uniFormId}/{schoolId}', 'HomeController@chooseUniform');
Route::any('update-reserv-uniform/{uniFormId}', 'HomeController@updateUniformReserv');