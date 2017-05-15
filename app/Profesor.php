<?php

namespace App;
use App\Crn;
use App\ProfesorRespuesta;
use App\Actividad;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public function crns(){
    	return $this->hasMany(Crn::class);
    }

    public function actividades(){
		return $this->belongsToMany(Actividad::class)->withPivot('completada');
	}

	public function profesor_respuestas(){
		return $this->hasMany(ProfesorRespuesta::class);
	}
		    
}
