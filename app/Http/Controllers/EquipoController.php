<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Actividad;
use App\Alumno;

class EquipoController extends Controller
{
    public function edit(Actividad $actividad, Equipo $equipo)
    {   
        $alumnos = $equipo->alumnos;
        $todos = $actividad->alumnos;

        foreach($actividad->equipos as $team){
            $todos = $todos->diff($team->alumnos);
        }

        $todos = $todos->sortBy('matricula');

        return view('profesor.equipos.edit', compact('equipo', 'alumnos', 'actividad', 'todos'));
    }

    public function addStudent(){
        $equipo = Equipo::find(request('equipo_id'));
        $alumno = Alumno::find(request('alumno_id'));
        $actividad = $alumno->actividades->find(request('actividad_id'));
        $plan = $alumno->plan;

        $alumno->equipos()->attach($equipo);
        $alumno->save();

        $actividad->pivot->equipo_id = $equipo->id;
        $actividad->pivot->save();
        return $alumno;
    }

    public function deleteStudent(){
        $equipo = Equipo::find(request('equipo_id'));
        $alumno = Alumno::find(request('alumno_id'));
        $actividad = $alumno->actividades->find(request('actividad_id'));
        $plan = $alumno->plan;

        $equipo->alumnos()->detach($alumno->id);
        $equipo->save();

        $actividad->pivot->equipo_id = null;
        $actividad->pivot->save();
        return $alumno;
    }
}
