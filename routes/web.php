<?php

Route::get('/', 'HomeController@home')->name('home');
Route::any('register-school', 'HomeController@registerSchool');
Route::get('profile-school/{id}', 'HomeController@schoolProfile')->name('profile-school');
Route::post('profile-school-update/{id}', 'HomeController@updateSchool')->name('profile-school');
Route::get('profile-school-edit/{id}', 'HomeController@editSchool')->name('profile-school');
Route::any('register-student', 'HomeController@registerStudent');



Route::get('about-school', 'HomeController@aboutSchool');
Route::get('show-schools', 'HomeController@showSchools');
Route::post('login-school', 'HomeController@LoginSchool');





