<?php

namespace App;
use App\Alumno;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function alumnos(){
		return $this->belongsToMany(Alumno::class);
	}
}
