<?php

namespace App;
use App\Profesor;
use App\Materia;
use App\Periodo;
use App\Alumno;

use Illuminate\Database\Eloquent\Model;

class Crn extends Model
{
    public function profesor(){
    	return $this->belongsTo(Profesor::class);
    }
    public function materia(){
    	return $this->belongsTo(Materia::class);
    }
    public function periodo(){
    	return $this->belongsTo(Periodo::class);
    } 

	public function alumnos(){
		return $this->belongsToMany(Alumno::class);
	}	    
}
