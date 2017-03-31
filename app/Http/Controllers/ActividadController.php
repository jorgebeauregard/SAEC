<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Alumno;
use App\Equipo;
use App\AlumnoRespuestas;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Alumno::first()->actividades;
        
        return view('actividades.index', compact('actividades'));
    }

    public function show($id)
    {
        $logged = Alumno::first();
    	$actividad = Actividad::find($id);
    	$competencias = $actividad->competencias;
        $alumnos = Equipo::find($logged->getActividadEquipo($id))->alumnos;
        
        if($actividad->vista)
            return view('actividades.show_competence', compact('actividad','competencias', 'alumnos'));
        else
            return view('actividades.show_competence', compact('actividad','competencias', 'alumnos'));
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
        $logged = Alumno::first();
    	$actividad = Actividad::find($id);
        $competencias = $actividad->competencias;
        $alumnos = Equipo::find($logged->getActividadEquipo($id))->alumnos;

        foreach($competencias as $competencia){
            foreach($competencia->comportamientos as $comportamiento){
                foreach($alumnos as $alumno){
                    $name = $comportamiento->id.'_'.$alumno->id;
                    AlumnoRespuestas::create([
                        'actividad_id' => $actividad_id,
                        'evaluador_id' => $logged->id,
                        'evaluado_id' => $alumno->id,
                        'comportamiento_id' => $comportamiento->id,
                        'nota' => $request($name);
                    ]);
                }
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //
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
