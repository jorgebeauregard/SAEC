<?php

namespace App;
use App\Comportamiento;
use App\Actividad;
use App\Alumno;
use App\Profesor;

use Illuminate\Database\Eloquent\Model;

class ProfesorRespuesta extends Model
{
    protected $fillable = ['actividad_id', 'profesor_id', 'evaluado_id', 'comportamiento_id', 'nota', 'comentario'];

    public function comportamiento(){
    	return $this->belongsTo(Comportamiento::class);
    }

    public function actividad(){
    	return $this->belongsTo(Actividad::class);
    }  

     public function profesor(){
    	return $this->belongsTo(Profesor::class);
    } 

     public function evaluado(){
    	return $this->belongsTo(Alumno::class, 'evaluado_id');
    }   
}
