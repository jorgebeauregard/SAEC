<?php

namespace App;
use App\Equipo;
use App\ProfesorRespuesta;
use App\Profesor;
use App\Alumno;
use App\Competencia;
use App\AlumnoRespuesta;
use App\Crn;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    
    protected $dates = ['fecha_limite'];

    public function equipos(){
    	return $this->hasMany(Equipo::class);
    }

    public function profesor_respuestas(){
    	return $this->hasMany(ProfesorRespuesta::class);
    }     

    public function profesor(){
    	return $this->belongsToMany(Profesor::class);
    }      

    public function competencias(){
    	return $this->belongsToMany(Competencia::class);
    } 

    public function alumno_respuestas(){
    	return $this->hasMany(AlumnoRespuesta::class);
    }

    public function alumnos(){
    	return $this->belongsToMany(Alumno::class);
    }

    public function crn(){
        return $this->belongsTo(Crn::class);
    }
}
