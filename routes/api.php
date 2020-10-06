<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['https.protocol']], function () {
    Route::group(['namespace' => 'Api'], function () {

        Route::post('auth/register', 'AuthController@register')->name('auth.register');
        Route::post('auth/login', 'AuthController@login')->name('auth.login');
        Route::get('auth/refresh', 'AuthController@refresh')->name('auth.refresh');

        // Route::group(['middleware' => 'auth:api'], function () {
        //     Route::get('auth/me', 'AuthController@me')->name('auth.me');
        //     Route::post('auth/logout', 'AuthController@logout')->name('auth.logout');

        //     Route::get('establishments', 'EstablishmentController@index')->name('establishment.index');
        //     Route::get('establishment/{establishment}', 'EstablishmentController@show')->name('establishment.show');
        //     Route::post('establishment', 'EstablishmentController@store')->name('establishment.store');
        //     Route::put('establishment/{establishment}', 'EstablishmentController@update')->name('establishment.update');
        //     Route::delete('establishment/{establishment}', 'EstablishmentController@destroy')->name('establishment.destroy');

        //     Route::get('cards', 'CardController@index')->name('card.index');
        //     Route::get('card/{card}', 'CardController@show')->name('card.show');
        //     Route::post('card', 'CardController@store')->name('card.store');
        //     Route::put('card/{card}', 'CardController@update')->name('card.update');
        //     Route::delete('card/{card}', 'CardController@destroy')->name('card.destroy');
        // });
    });
});
