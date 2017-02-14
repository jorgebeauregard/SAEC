<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    public function comportamiento(){
    	return $this -> belongsToMany('App\Comportamiento');
    }
}
