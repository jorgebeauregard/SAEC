<?php

namespace App;
Use App\Crn;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function crns(){
    	return $this->hasMany(Crn::class);
    }    
}
