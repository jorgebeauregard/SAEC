<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crn;
use App\Alumno;
use App\Actividad;
use App\Periodo;
use Carbon\Carbon;
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
        $grupo = Crn::find($grupo_id);
        $alumnos = $grupo->alumnos;
        $actividades = $grupo->actividades;

        return view('profesor.grupos.show', compact('grupo', 'alumnos', 'actividades'));
     }
}
