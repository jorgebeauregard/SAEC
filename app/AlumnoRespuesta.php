<?php

namespace App;
use App\Comportamiento;
use App\Actividad;
use App\Alumno;

use Illuminate\Database\Eloquent\Model;

class AlumnoRespuesta extends Model
{
    protected $fillable = ['actividad_id', 'alumno_id', 'evaluado_id', 'comportamiento_id', 'nota'];

    public function comportamiento(){
    	return $this->belongsTo(Comportamiento::class);
    }

    public function actividad(){
    	return $this->belongsTo(Actividad::class);
    }  

     public function evaluador(){
    	return $this->belongsTo(Alumno::class, 'evaluador_id');
    } 

     public function evaluado(){
    	return $this->belongsTo(Alumno::class, 'evaluado_id');
    }             

}
