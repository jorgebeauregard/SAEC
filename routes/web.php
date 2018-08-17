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
    Route::get('/home', 'HomeController@index')->name('/home');
    Route::get('/', function () {
        return view('/home');
    });

    Route::resource('/actividades', 'ActividadController');
    Route::get('/actividades/{actividad}', 'ActividadController@show');
    Route::get('/actividades/{actividad}/alumno/{alumno}', 'ActividadController@showProfessor');
    Route::post('/actividades/{actividad}', 'ActividadController@store');
    
    Route::get('/calificaciones/alumnos/{alumno}', 'AlumnoController@grades');
    Route::get('/calificaciones/alumnos/{alumno}/competencias/{competencia}', 'AlumnoController@competence');

    Route::resource('perfil', 'PerfilController');
    
    Route::group(['middleware' => ['auth', 'acl'], 'is' => 'professor'], function() {

        Route::get('/actividades/editar/{actividad}', 'ActividadController@edit');
        Route::get('/actividades/invitado/{actividad}', 'ActividadController@guest');
        Route::post('/actividades/actualizar/{actividad}', 'ActividadController@update');
        Route::get('/actividades/{actividad}/alumnos/{alumno}', 'ActividadController@showEvaluation');
        Route::post('/actividades/{actividad}/alumnos/{alumno}', 'ActividadController@evaluateStudent');
        Route::get('/actividades/{actividad}/equipos/aleatorio', 'EquipoController@generate')->name('teams.generate');
        Route::get('/actividades/{actividad}/equipos/{equipo}', 'EquipoController@edit');
        
        Route::post('/equipos/{equipo}/upload', 'EquipoController@storeFile')->name('teams.upload');

        Route::get('/actividades/equipos/{equipo}/agregarAlumno', 'EquipoController@addStudent');
        Route::get('/actividades/equipos/{equipo}/eliminarAlumno', 'EquipoController@deleteStudent');
        
        Route::get('/crear/actividad', 'ActividadController@create');
        Route::post('/crear/actividad', 'ActividadController@newActivity');

        Route::get('/grupos', 'CrnController@index');
        Route::get('/grupos/{grupo}', 'CrnController@show');
        Route::post('/crear/grupo', 'CrnController@store');

        Route::get('/eliminarAlumno', 'CrnController@deleteStudent');
        Route::get('/agregarAlumno', 'CrnController@addStudent');
    });

    Route::group([
        'middleware' => ['auth', 'acl'],
        'is' => 'student'
    ], function() {
        Route::post('/actividades/unirse/{actividad}/{equipo}', 'ActividadController@joinTeam');
    });

    

    Route::get('logout', function(){
        Auth::logout();
        return redirect()->route('/home');
    })->name('logout');
});

Auth::routes();