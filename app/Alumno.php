<?php

namespace App;
use App\Campus;
use App\Plan;
use App\Equipo;
use App\AlumnoRespuesta;
use App\ProfesorRespuesta;
use App\Crn;
use App\Actividad;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function campus(){
		return $this->belongsTo(Campus::class);
	}

	public function plan(){
		return $this->belongsTo(Plan::class);
	}

	public function equipos(){
		return $this->belongsToMany(Equipo::class);
	}

	public function alumno_respuestas(){
		return $this->hasMany(AlumnoRespuesta::class);
	}

	public function profesor_respuestas(){
		return $this->hasMany(ProfesorRespuesta::class);
	}	

	public function crns(){
		return $this->belongsToMany(Crn::class);
	}	

	public function actividades(){
		return $this->belongsToMany(Actividad::class);
	}	

}
