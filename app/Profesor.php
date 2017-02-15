<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    public function crn(){
    	return $this -> hasMany('App\Crn');
    }
}
