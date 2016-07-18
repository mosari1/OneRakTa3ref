<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('Authentification','AuthentificationController@authentification');
Route::resource('connexion','AuthentificationController');

Route::group(['middleware' => ['web','conecte']], function () {
    Route::get('/', function () {
        
        return redirect()->action('AuthentificationController@index');
    });
    Route::resource('Dashboard','DashboardController');
    Route::get('logout','AuthentificationController@logout');
});
