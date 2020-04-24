<?php



Route::prefix('admin')->group(function(){
    Auth::routes();


    Route::middleware('auth')->group(function () {

        Route::get('/', 'ProductController@index');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');

    });
});

Route::get('/', 'HomeController@home')->name('home');
Route::get('home', 'HomeController@index')->name('home');




