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

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Dashboard', 'prefix' => 'dashboard'], function () {

    Route::get('home', 'HomeController@index')->name('home.index');

    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::put('settings/{user}', 'SettingController@update')->name('settings.update');
    Route::post('settings/change-menu', 'SettingController@changeMenu')->name('settings.changeMenu');

    Route::resource('users', 'UserController');

    Route::put('image/{id}/upload', 'ImageController@upload')->name('image.upload');
    Route::delete('image/destroy/{file}', 'ImageController@destroy')->name('image.destroy');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
