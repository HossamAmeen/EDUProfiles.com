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

Route::post('login-school', 'HomeController@LoginSchool');
Route::post('login-student', 'HomeController@LoginStudent');





