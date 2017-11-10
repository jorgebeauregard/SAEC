<?php

namespace App;
use App\Crn;
use App\ProfesorRespuesta;
use App\Actividad;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public function crns(){
    	return $this->hasMany(Crn::class);
    }

    public function actividades(){
		return $this->belongsToMany(Actividad::class)->withPivot('completada');
	}

	public function profesor_respuestas(){
		return $this->hasMany(ProfesorRespuesta::class);
	}

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function evaluar(Request $request, $actividad_id, $alumno_id){
		$actividad = $this->actividades->find($actividad_id);
		
		foreach($actividad->competencias as $competencia){
            foreach($competencia->comportamientos as $comportamiento){

				ProfesorRespuesta::create([
					'actividad_id' => $actividad_id,
					'profesor_id' => $this->id,
					'evaluado_id' => $alumno_id,
					'comportamiento_id' => $comportamiento->id,
					'nota' => request('comportamiento_'.$comportamiento->id),
					'comentario' => ' '
				]);
            }
        }
	}
}
