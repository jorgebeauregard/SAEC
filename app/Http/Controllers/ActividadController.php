<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Alumno;
use App\Equipo;
use App\AlumnoRespuesta;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged = Alumno::first();
        $actividades = $logged->actividades->sortBy('fecha_limite')->all();
        
        return view('actividades.index', compact('logged', 'actividades'));
    }

    public function show($actividad_id)
    {
        $logged = Alumno::first();
    	$actividad = $logged->actividades->find($actividad_id);
        
        if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');

    	$competencias = $actividad->competencias;
        $alumnos = Equipo::find($actividad->pivot->equipo_id)->alumnos;
        
        if($actividad->vista == 1)
            return view('actividades.show_student', compact('actividad','competencias', 'alumnos'));
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
    public function store($actividad_id)
    {
        $logged = Alumno::first();
    	$actividad = $logged->actividades->find($actividad_id);

         if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');
            
        $equipo = Equipo::find($actividad->pivot->equipo_id);

        foreach($actividad->competencias as $competencia){
            foreach($competencia->comportamientos as $comportamiento){
                foreach($equipo->alumnos as $alumno){
                    $name = $comportamiento->id.'_'.$alumno->id;
                    AlumnoRespuesta::create([
                        'actividad_id' => $actividad_id,
                        'alumno_id' => $logged->id,
                        'evaluado_id' => $alumno->id,
                        'comportamiento_id' => $comportamiento->id,
                        'nota' => (int) request((String)$name),
                    ]);
                }   
            }
        }

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
