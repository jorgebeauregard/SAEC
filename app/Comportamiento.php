<?php

namespace App;
use App\AlumnoRespuesta;
use App\ProfesorRespuesta;
use App\Competencia;

use Illuminate\Database\Eloquent\Model;

class Comportamiento extends Model
{
    public function alumno_respuestas(){
    	return $this->hasMany(AlumnoRespuesta::class);
    }  

    public function profesor_respuestas(){
    	return $this->hasMany(ProfesorRespuesta::class);
    }

    public function competencia(){
    	return $this->belongsTo(Competencia::class);
    }                       
}
