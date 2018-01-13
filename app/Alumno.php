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
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matricula', 'nombre', 'apellido_materno', 'apellido_paterno', 'prom_anterior', 'genero', 'campus_id', 'plan_id', 'user_id',
	];
	
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

					AlumnoRespuesta::create([
						'actividad_id' => $actividad_id,
						'alumno_id' => $this->id,
						'evaluado_id' => $alumno->id,
						'comportamiento_id' => $comportamiento->id,
						'nota' => (int) request((String)$name)
					]);
                }   
            }
        }
	}
}