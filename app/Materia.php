<?php

namespace App;
use App\Crn;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function crns(){
    	return $this->hasMany(Crn::class);
    }    
}
