<?php

namespace App;
use App\Profesor;
use App\Materia;
use App\Periodo;
use App\Alumno;
use App\Actividad;

use Illuminate\Database\Eloquent\Model;

class Crn extends Model
{
    protected $fillable = ['nombre', 'profesor_id', 'periodo_id'];
    
    public function profesor(){
    	return $this->belongsTo(Profesor::class);
    }
    
    public function periodo(){
    	return $this->belongsTo(Periodo::class);
    } 

	public function alumnos(){
		return $this->belongsToMany(Alumno::class);
    }

    public function actividades(){
        return $this->hasMany(Actividad::class);
    }
}
