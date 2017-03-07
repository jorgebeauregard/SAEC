<?php

namespace App;
use App\Alumno;
use App\Actividad;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function alumnos(){
		return $this->belongsToMany(Alumno::class);
	}

    public function actividad(){
    	return $this->belongsTo(Actividad::class);
    }    	
    
}
