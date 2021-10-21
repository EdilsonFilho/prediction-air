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

// https://github.com/alexeymezenin/laravel-best-practices#follow-laravel-naming-conventions

Route::group(['middleware' => ['https.protocol']], function () {

    Route::get('/', function () {
        return redirect('/login');
    });

    Route::group(['middleware' => ['auth'], 'namespace' => 'Dashboard', 'prefix' => 'dashboard'], function () {

        Route::get('home', 'HomeController@index')->name('home.index');
        Route::get('home/prediction', 'HomeController@prediction')->name('home.prediction');

        Route::get('who/index', 'WhoController@index')->name('who.index');
        Route::get('who/theory', 'WhoController@theory')->name('who.theory');
        Route::get('who/show', 'WhoController@show')->name('who.show');

        Route::get('settings', 'SettingController@index')->name('settings.index');
        Route::put('settings/{user}', 'SettingController@update')->name('settings.update');
        Route::post('settings/change-menu', 'SettingController@changeMenu')->name('settings.changeMenu');

        Route::put('image/{id}/upload', 'ImageController@upload')->name('image.upload');
        Route::delete('image/destroy/{file}', 'ImageController@destroy')->name('image.destroy');

        Route::group(['middleware' => ['admin']], function () {
            Route::resource('users', 'UserController');
        });
    });
 
    Auth::routes();
});
