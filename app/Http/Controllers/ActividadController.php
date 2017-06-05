<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Alumno;
use App\Equipo;
use App\Profesor;
use Illuminate\Support\Facades\Auth;
use App\AlumnoRespuesta;
use Carbon\Carbon;


class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->roles[0]->id == 3)
            $logged = Auth::user()->alumno[0];
        else
            $logged = Auth::user()->profesor[0];

        $actividades = $logged->actividades->sortBy('fecha_limite')->all();


        if(Auth::user()->roles[0]->id == 3)
            return view('alumno.actividades.index', compact('logged', 'actividades'));
        else
            return view('profesor.actividades.index', compact('logged', 'actividades'));
    }

    public function show($actividad_id)
    {
        if(Auth::user()->roles[0]->id == 3)
            $logged = Auth::user()->alumno[0];
        else
            $logged = Auth::user()->profesor[0];

    	$actividad = $logged->actividades->find($actividad_id);
        
        if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');

        
    	$competencias = $actividad->competencias;

        if(Auth::user()->roles[0]->id == 3){
            $alumnos = Equipo::find($actividad->pivot->equipo_id)->alumnos;
        
            if($actividad->vista == 1)
                return view('alumno.actividades.show_student', compact('actividad','competencias', 'alumnos'));
            else
                return view('alumno.actividades.show_competence', compact('actividad','competencias', 'alumnos'));
        }
        else{
            $alumnos = $actividad->alumnos;
            return view('profesor.actividades.show_competence', compact('actividad', 'competencias', 'alumnos'));
        }
        
        
    }

    public function create()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $actividad_id)
    {
        if(Auth::user()->roles[0]->id == 3)
            $logged = Auth::user()->alumno[0];
        else
            $logged = Auth::user()->profesor[0];
            
    	$actividad = $logged->actividades->find($actividad_id);

        if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');

        $logged->evaluar($request, $actividad_id);
        $actividad->pivot->completada = 1;
        $actividad->pivot->save();

        return redirect('/actividades'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($actividad_id)
    {
        $actividad = Actividad::find($actividad_id);
        $alumnos = Alumno::all()->sortBy('matricula');
        return view('profesor.actividades.edit', compact('actividad', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
