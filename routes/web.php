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
Route::group(['middleware' => ['https.protocol']], function () {

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

        Route::get('my-surveys', 'MySurveyController@index')->name('my_surveys.index');

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

        Route::get('step4s/{survey}', 'Step4Controller@create')->name('step4s.create');
        Route::post('step4s/{survey}', 'Step4Controller@store')->name('step4s.store');
        Route::get('step4s/{survey}/{step4}', 'Step4Controller@show')->name('step4s.show');

        Route::get('step5s/{survey}', 'Step5Controller@create')->name('step5s.create');
        Route::post('step5s/{survey}', 'Step5Controller@store')->name('step5s.store');
        Route::get('step5s/{survey}/{step5}', 'Step5Controller@show')->name('step5s.show');

        Route::get('step6s/{survey}', 'Step6Controller@create')->name('step6s.create');
        Route::post('step6s/{survey}', 'Step6Controller@store')->name('step6s.store');
        Route::get('step6s/{survey}/{step6}', 'Step6Controller@show')->name('step6s.show');

        Route::get('navigations/to/{survey}', 'NavigationToController@to')->name('navigations.to');

        // Route::resource('clinical-records', 'ClinicalRecordController');
        // Route::get('clinical-records/{user}', 'SurveyController@index')->name('surveys.index');
        Route::post('clinical-records/{user}', 'ClinicalRecordController@store')->name('clinical-records.store');
        Route::get('clinical-records/{clinical_record}/edit', 'ClinicalRecordController@edit')->name('clinical-records.edit');
        Route::put('clinical-records/{clinical_record}', 'ClinicalRecordController@update')->name('clinical-records.update');

        Route::group(['middleware' => ['only.admin.professional']], function () {
            Route::post('patients', 'PatientController@store')->name('patients.store');
            Route::get('patients', 'PatientController@index')->name('patients.index');
            Route::get('patients/create', 'PatientController@create')->name('patients.create');
            Route::delete('patients/{user}', 'PatientController@destroy')->name('patients.destroy');
            Route::put('patients/{user}', 'PatientController@update')->name('patients.update');
            Route::get('patients/{user}/edit', 'PatientController@edit')->name('patients.edit');
            Route::get('patients/export', 'PatientController@export')->name('patients.export');
        });

        Route::group(['middleware' => ['admin']], function () {
            Route::resource('users', 'UserController');
        });
    });

    Auth::routes();
});
