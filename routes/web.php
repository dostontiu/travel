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

use App\Menu;

Route::get('/', 'TravelController@index')->name('frontend.index');
Route::get('/viewswitch/{name}', 'TravelController@viewSwitch')->name('viewswitch');
Route::get('lang/{locale}', 'TravelController@lang')->name('frontend.lang');
View::composer(['layouts.main'], function ($view){
    $menus = Menu::where('parent_id', null)->get();
    $view->with('menus', $menus);
});

//Route::resource('posttour', 'PostTourController');
Route::get('posttour', 'PostTourController@index')->name('posttour.index');
Route::post('posttour', 'PostTourController@store')->name('posttour.store');
Route::get('posttour/create/{locale}/{posttour?}', 'PostTourController@create')->name('posttour.create')->where(['posttour' => '[0-9]+', 'locale' => '[a-z]+']);
Route::get('posttour/{posttour}', 'PostTourController@show')->name('posttour.show');
Route::get('posttour/{posttour}/edit/{locale}', 'PostTourController@edit')->name('posttour.edit');
Route::put('posttour/{posttour}', 'PostTourController@update')->name('posttour.update');

Route::post('upload-images', 'PostTourController@uploadImages')->name('upload-images');
Route::post('/remove-image', 'PostTourController@delImage')->name('remove-image');
Route::delete('posttour/del-image/{id}', 'PostTourController@delImage')->name('del-image');

Route::get('account', 'AccountController@index')->name('account.index')->middleware('auth');
Route::get('account/{company_name}', 'AccountController@show')->name('account.show');
Auth::routes();
