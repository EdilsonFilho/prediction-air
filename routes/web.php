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

    Route::put('image/{id}/upload', 'ImageController@upload')->name('image.upload');
    Route::delete('image/destroy/{file}', 'ImageController@destroy')->name('image.destroy');

    // Route::resource('patients', 'PatientController');
    Route::post('patients', 'PatientController@store')->name('patients.store');
    Route::get('patients', 'PatientController@index')->name('patients.index');
    Route::get('patients/create', 'PatientController@create')->name('patients.create');
    Route::delete('patients/{user}', 'PatientController@destroy')->name('patients.destroy');
    Route::put('patients/{user}', 'PatientController@update')->name('patients.update');
    Route::get('patients/{user}/edit', 'PatientController@edit')->name('patients.edit');

    Route::group(['middleware' => ['admin']], function () {
        Route::resource('users', 'UserController');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
