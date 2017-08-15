<?php

namespace App;
use App\Equipo;
use App\ProfesorRespuesta;
use App\Profesor;
use App\Alumno;
use App\Competencia;
use App\AlumnoRespuesta;
use App\Crn;
use App\Periodo;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'fecha_limite', 'profesor_id', 'crn_id', 'periodo_id'];
    protected $dates = ['fecha_limite'];

    public function equipos(){
    	return $this->hasMany(Equipo::class);
    }

    public function profesor_respuestas(){
    	return $this->hasMany(ProfesorRespuesta::class);
    }     

    public function profesor(){
    	return $this->belongsToMany(Profesor::class)->withPivot('completada');
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

    public function periodo(){
        return $this->belongsTo(Periodo::class);
    }
}
