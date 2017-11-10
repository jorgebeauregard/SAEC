<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Alumno;
use App\Equipo;
use App\Profesor;
use App\Periodo;
use App\Crn;
use App\Competencia;
use App\ProfesorRespuesta;
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
        
        $actividades = $logged->actividades->where('periodo_id', Periodo::all()->last()->id)->sortBy('fecha_limite');
        $actividades2 = $actividades->chunk(4)->toArray();
        $actividades = $actividades->all();
        if(sizeof($actividades)>0)
            $actividades2 = $actividades2[0];

        if(Auth::user()->roles[0]->id == 3)
            return view('alumno.actividades.index', compact('logged', 'actividades', 'actividades2'));
        else
            return view('profesor.actividades.index', compact('logged', 'actividades', 'actividades2'));
    }

    public function show($actividad_id)
    {
        $logged = Auth::user()->alumno[0];

    	$actividad = $logged->actividades->find($actividad_id);
        
        if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');
        
    	$competencias = $actividad->competencias;

        if( count($logged->equipos->where('actividad_id', $actividad->id)) == 0 ){//Si el alumno no tiene equipo
            return view('alumno.actividades.agregar_equipo', compact('actividad'));
        }
        else{
            $alumnos = Equipo::find($actividad->pivot->equipo_id)->alumnos;

            if($actividad->vista == 1)
                return view('alumno.actividades.show_competence', compact('actividad','competencias', 'alumnos'));
            else
                return view('alumno.actividades.show_student', compact('actividad','competencias', 'alumnos'));
        }
    }

    public function showEvaluation($actividad_id, $alumno_id){
        $logged = Auth::user()->profesor[0];
        $actividad = $logged->actividades->find($actividad_id);
        $competencias = $actividad->competencias;
        $alumno = Alumno::find($alumno_id);

        return view('profesor.actividades.show_student', compact('actividad', 'competencias', 'alumno'));
    }

    public function evaluateStudent(Request $request, $actividad_id, $alumno_id){
        $logged = Auth::user()->profesor[0];

        $logged->evaluar($request, $actividad_id, $alumno_id);

        $actividad = $logged->actividades->find($actividad_id);
        $cuenta_alumnos = $actividad->alumnos->count();
        $cuenta_respuestas = ProfesorRespuesta::all()->where('actividad_id', $actividad_id)->groupBy('evaluado_id')->count();
        
        if($cuenta_alumnos == $cuenta_respuestas){
            $actividad->pivot->completada = 1;
            $actividad->pivot->save();
        }
        return redirect('/actividades/editar/'.$actividad_id);
    }

    public function create()
    {
        $logged = Auth::user()->profesor[0];
        $periodo = Periodo::all()->sortByDesc('id')->first();
        $grupos = $logged->crns->where('periodo_id', $periodo->id);
        $competencias = Competencia::all()->sortBy('nombre');

        return view('profesor.actividades.create', compact('logged', 'grupos', 'competencias'));
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
        $logged = Auth::user()->alumno[0];
            
    	$actividad = $logged->actividades->find($actividad_id);

        if($actividad == null || $actividad->pivot->completada)
            return redirect('/actividades');

        $logged->evaluar($request, $actividad_id);
        $actividad->pivot->completada = 1;
        $actividad->pivot->save();

        return redirect('/actividades'); 
    }

    public function newActivity(Request $request){
        $logged = Auth::user()->profesor[0];
        $periodo = Periodo::all()->sortByDesc('id')->first();
        $grupo = Crn::find((int)request('grupo_id'));
        $competencias = Competencia::all();

        $actividad = Actividad::create([
            'nombre' => request('nombre'),
            'descripcion' => request('descripcion'),
            'fecha_limite' => request('fecha_limite'),
            'profesor_id' => $logged->id,
            'periodo_id' => $periodo->id,
            'crn_id' => request('grupo_id'),
        ]);

        $actividad->profesor()->attach($logged->id);
        
        foreach($grupo->alumnos as $alumno){
            $actividad->alumnos()->attach($alumno);
        }

        for($i=1; $i<=(int)request('num_equipos'); $i++){
            $equipo = Equipo::create([
                'numero_equipo' => $i,
                'actividad_id' => $actividad->id,
                'contrasena' => str_random(3),
            ]);
        }

        foreach($competencias as $competencia){
            if((int) request((String)('competencia_'.$competencia->id)) == 1){
                $actividad->competencias()->attach($competencia);
            }
        }

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
        
        return view('profesor.actividades.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Actividad $actividad)
    {
        
        /*$this->validate(request(), [
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_limita' => 'required',
            'num_equipos' => 'required'
        ]);*/

        $actividad->nombre = request('nombre');
        $actividad->descripcion = request('descripcion');
        $actividad->fecha_limite = request('fecha_limite');
        
        if((int)request('num_equipos') != count($actividad->equipos)){
            
            foreach($actividad->alumnos as $alumno){
                $alumno->equipo_id = NULL;
            }

            foreach($actividad->equipos as $equipo){
                $equipo->delete();
            }

            for($i=1; $i<=(int)request('num_equipos'); $i++){
                Equipo::create([
                    'numero_equipo' => $i,
                    'actividad_id' => $actividad->id,
                    'contrasena' => str_random(3),
                ]);
            }
        }
        
        $actividad->save();
        session()->flash('message', 'Se ha actualizado la actividad');
        return redirect('/actividades/editar/'.$actividad->id);
    }

    public function joinTeam(Request $request, Actividad $actividad){
        $alumno = Auth::user()->alumno[0];
        $actividad = $alumno->actividades->find($actividad->id);
        $key = request('clave');
        $equipo = $actividad->equipos->where('contrasena', $key)->first();

        if(count($equipo)){
            $alumno->equipos()->attach($equipo);
            $alumno->save();
            $actividad->pivot->equipo_id = $equipo->id;
            $actividad->pivot->save();
            return redirect('/actividades/'.$actividad->id);
        }
        else{
            session()->flash('message', 'No se ha encontrado un equipo con esa clave.');
            return redirect()->back();
        }
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
