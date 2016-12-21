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
Route::post('/loadCategory', 'HomeController@loadCategory');
Route::post('/loadSubcategory', 'HomeController@loadSubcategory')->name('ajaxLoadSubcategories');
Route::post('/ajaxFilter', 'HomeController@ajaxFilter')->name('ajaxFilter');


Route::get('/admin', 'HomeController@admin')->name('admin');
Route::post('/categories/delete', 'ajaxController@deleteCategory')->name('ajaxDelete');
Route::post('/items/delete', 'ajaxController@deleteItem')->name('ajaxDeleteItem');
Route::post('/categories/load', 'ajaxController@loadSubcategory')->name('subcategoryLoad');
Route::post('items', 'ajaxController@ajaxImageDelete')->name('ajaxImageDelete');


Route::group([
    'prefix' => 'admin',
], function () {
    Route::resource('items', 'ItemsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('categorieschild', 'CategoriesChildController');
});

