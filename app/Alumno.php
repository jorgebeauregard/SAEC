<?php

namespace App;
use Illuminate\Http\Request;
use App\User;
use App\Campus;
use App\Comportamiento;
use App\Plan;
use App\Equipo;
use App\AlumnoRespuesta;
use App\ProfesorRespuesta;
use App\Crn;
use App\Actividad;
use App\ActividadAlumno;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alumno extends Model
{
    public function campus(){
		return $this->belongsTo(Campus::class);
	}

	public function plan(){
		return $this->belongsTo(Plan::class);
	}

	public function equipos(){
		return $this->belongsToMany(Equipo::class);
	}

	public function alumno_respuestas(){
		return $this->hasMany(AlumnoRespuesta::class);
	}

	public function profesor_respuestas(){
		return $this->hasMany(ProfesorRespuesta::class);
	}	

	public function crns(){
		return $this->belongsToMany(Crn::class);
	}	

	public function actividades(){
		return $this->belongsToMany(Actividad::class)->withPivot('completada', 'equipo_id');
	}

	public function user(){
		return $this->belongsTo(User::class);
	}

	public function evaluar(Request $request, $actividad_id){
		$actividad = $this->actividades->find($actividad_id);
		$equipo = Equipo::find($actividad->pivot->equipo_id);
		
		foreach($actividad->competencias as $competencia){
            foreach($competencia->comportamientos as $comportamiento){
                foreach($equipo->alumnos as $alumno){
					$name = $comportamiento->id.'_'.$alumno->id;

					if(!(int) request((String)$name) == 0 ){
						$calidad = (int) request((String)('calidad_'.$name));
						$frecuencia = (int) request((String)('frecuencia_'.$name));
					}
					else{
						$calidad = 0;
						$frecuencia = 0;
					}

					AlumnoRespuesta::create([
						'actividad_id' => $actividad_id,
						'alumno_id' => $this->id,
						'evaluado_id' => $alumno->id,
						'comportamiento_id' => $comportamiento->id,
						'nota_calidad' => $calidad,
						'nota_frecuencia' => $frecuencia
					]);
                }   
            }
        }
	}
}