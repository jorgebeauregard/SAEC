<?php

namespace App;
Use App\Crn;
use App\Actividad;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function crns(){
    	return $this->hasMany(Crn::class);
    }    

    public function actividades(){
        return $this->hasMany(Actividad::class);
    }
}
