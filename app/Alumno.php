<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //

    public function campus(){
    	return $this -> belongsTo('App\Campus');
    }

    public function plan(){
    	return $this -> belongsTo('App\Plan');
    }

    
}
