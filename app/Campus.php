<?php

namespace App;
use App\Alumno;


use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    
	public function alumnos(){
		return $this->hasMany(Alumno::class);
	}

}
