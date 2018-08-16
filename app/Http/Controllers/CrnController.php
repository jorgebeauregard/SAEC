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

     public function store(Request $request){
        $logged = Auth::user()->profesor[0];
        $periodo = Periodo::all()->sortByDesc('id')->first();

        $grupo = Crn::create([
            'nombre' => request('nombre'),
            'profesor_id' => $logged->id,
            'periodo_id' => $periodo->id,
        ]);

        return redirect("/grupos/".$grupo->id);
     }

     public function addStudent(){
        $grupo = Crn::find(request('grupo_id'));
        $alumno = Alumno::find(request('alumno_id'));
        $plan = $alumno->plan;

        if(!$grupo->alumnos->search($alumno)) {
            $grupo->alumnos()->attach($alumno);
            return $alumno;
        }
        
        return false;
     }

     public function deleteStudent(){
        $grupo = Crn::find(request('grupo_id'));
        $alumno = Alumno::find(request('alumno_id'));
        $plan = $alumno->plan;

        if($grupo->alumnos->search($alumno)) {
            $grupo->alumnos()->detach($alumno->id);
            return $alumno;
        }

        return false;
     }
}