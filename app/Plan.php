<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function alumnos(){
		return $this->hasMany(Alumno::class);
	}
}
