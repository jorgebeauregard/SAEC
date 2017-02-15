<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function crns(){
        return $this->hasMany('App\Crn');
    }
}
