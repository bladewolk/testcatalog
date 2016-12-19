<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::post('/categories/delete', 'ajaxController@deleteCategory')->name('ajaxdelete');


Route::group([
    'prefix' => 'admin',
], function () {
    Route::resource('items', 'ItemsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('categorieschild', 'CategoriesChildController');
});

