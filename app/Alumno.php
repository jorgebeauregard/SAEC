<?php

namespace App;
use App\Campus;
use App\Plan;
use App\Equipo;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function campus(){
		return $this->belongsTo(Campus::class);
	}

	public function plan(){
		return $this->belongsTo(Plan::class);
	}

	public function equipos(){
		return $this->belongsToMany(Equipo::class);
	}
}
