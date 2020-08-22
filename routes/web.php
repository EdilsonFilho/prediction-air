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

    Route::post('patients', 'PatientController@store')->name('patients.store');
    Route::get('patients', 'PatientController@index')->name('patients.index');
    Route::get('patients/create', 'PatientController@create')->name('patients.create');
    Route::delete('patients/{user}', 'PatientController@destroy')->name('patients.destroy');
    Route::put('patients/{user}', 'PatientController@update')->name('patients.update');
    Route::get('patients/{user}/edit', 'PatientController@edit')->name('patients.edit');

    Route::get('surveys/{user}', 'SurveyController@index')->name('surveys.index');
    Route::post('surveys/{user}', 'SurveyController@store')->name('surveys.store');
    Route::get('surveys/{survey}/edit', 'SurveyController@edit')->name('surveys.edit');
    Route::delete('surveys/{survey}', 'SurveyController@destroy')->name('surveys.destroy');

    Route::get('step1s/{survey}', 'Step1Controller@create')->name('step1s.create');
    Route::post('step1s/{survey}', 'Step1Controller@store')->name('step1s.store');
    Route::get('step1s/{survey}/{step1}', 'Step1Controller@show')->name('step1s.show');

    Route::get('step2s/{survey}', 'Step2Controller@create')->name('step2s.create');
    Route::post('step2s/{survey}', 'Step2Controller@store')->name('step2s.store');
    Route::get('step2s/{survey}/{step2}', 'Step2Controller@show')->name('step2s.show');

    Route::get('step3s/{survey}', 'Step3Controller@create')->name('step3s.create');
    Route::post('step3s/{survey}', 'Step3Controller@store')->name('step3s.store');
    Route::get('step3s/{survey}/{step3}', 'Step3Controller@show')->name('step3s.show');

    Route::get('navigations/to/{user}', 'NavigationToController@to')->name('navigations.to');

    Route::group(['middleware' => ['admin']], function () {
        Route::resource('users', 'UserController');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
