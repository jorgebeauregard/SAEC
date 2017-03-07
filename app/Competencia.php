<?php

namespace App;
use App\Actividad;
use App\Comportamiento;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    public function actividades(){
    	return $this->belongsToMany(Actividad::class);
    }

    public function comportamientos(){
    	return $this->hasMany(Comportamiento::class);
    }                
}
