<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TravelController@index')->name('frontend.index');

Route::group(['middleware' => 'auth'], function (){
    Route::post('/remove-image', 'PostTourController@delImage')->name('remove-image');
    Route::resource('posttour', 'PostTourController');
    Route::resource('account', 'AccountController');

    Route::post('upload-images', 'PostTourController@uploadImages')->name('upload-images');
    Route::delete('posttour/del-image/{id}', 'PostTourController@delImage')->name('del-image');
    Route::post('/dlt', 'PostTourController@dlt');
//    Route::get('posttour/delete/{id}', 'PostTourController@destroy');
});
Auth::routes();
