<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crn extends Model
{
    public function profesor(){
    	return $this -> belongsTo('App\Profesor');
    }

    public function materia(){
    	return $this -> belongsTo('App\Materia');
    }

    public function periodo(){
    	return $this -> belongsTo('App\Periodo');
    }
}
