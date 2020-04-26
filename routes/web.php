<?php

Route::get('/', 'HomeController@home')->name('home');
Route::any('register-school', 'HomeController@registerSchool');
Route::get('profile-school/{id}', 'HomeController@schoolProfile')->name('profile-school');
Route::any('register-student', 'HomeController@registerStudent');




