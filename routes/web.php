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

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware'=>'auth'], function() {

    Route::get('/home', 'HomeController@index');

    Route::get('/', 'ActividadController@index')->name('/home');

    Route::resource('/actividades', 'ActividadController');

    Route::get('/actividades/{actividad}', 'ActividadController@show');

    Route::resource('/calificaciones', 'CalificacionesController');

    Route::resource('perfil', 'PerfilController');

    Auth::routes();

    Route::get('logout', function(){
        Auth::logout();
        return redirect()->route('/home');
    })->name('logout');

});

Auth::routes();
