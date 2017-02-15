<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comportamiento extends Model
{
    public function competencia(){
    	return $this -> belongsToMany('App\Competencia');
    }
}
