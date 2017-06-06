<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crn;
use App\Alumno;
use App\Actividad;
use App\Periodo;
use Carbon\Carbon;
use App\AlumnoCrn;
use App\Materia;
use Illuminate\Support\Facades\Auth;

class CrnController extends Controller
{
    public function index()
    {
        $logged = Auth::user()->profesor[0];
        $grupos = $logged->crns->where('periodo_id', Periodo::all()->last()->id);

        return view('profesor.grupos.index', compact('grupos'));
    }

     public function show($grupo_id)
     {
        $logged = Auth::user()->profesor[0];
        $grupo = Crn::find($grupo_id);
        $alumnos = $grupo->alumnos;
        $todos = Alumno::all()->diff($alumnos)->sortBy('matricula');
        $actividades = $logged->actividades->where('crn_id', $grupo->id)->all();

        return view('profesor.grupos.show', compact('grupo', 'alumnos', 'actividades', 'todos'));
     }

     public function create()
    {
        $materias = App\Materia::all();
        return view('profesor.grupos.create', compact('materias'));
    }

     public function addStudent($crn_id ,$alumno_id){

     }

     public function deleteStudent(){
        $grupo = Crn::find(request($grupo_id));
        $alumno = $grupo->alumnos->find(request($alumno_id));

        $alumnos = $grupo->alumnos;
        $todos = Alumno::all()->diff($alumnos)->sortBy('matricula');
     }
}