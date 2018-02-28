<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Comportamiento;
use App\Competencia;
use App\ProfesorRespuesta;
use App\AlumnoRespuesta;
use Illuminate\Support\Facades\Auth;
use JavaScript;

class AlumnoController extends Controller
{
    public function grades(Alumno $alumno){
        return view('alumno.calificaciones.index', compact('alumno'));
    }

    public function competence(Alumno $alumno, Competencia $competencia){
        $data = array();
        $data['names'] = ["Autoevaluación", "Profesores", "Compañeros"];
        $data['grades'] = array();
        $pesos = array();
        $comportamientos = Comportamiento::all()->where('competencia_id', $competencia->id);
        
        for($i=0; $i<3; $i++){
            $pesos[$i] = 0;
            $data['grades'][$i] = 0;
        }

        foreach($comportamientos as $comportamiento){
            $respuestasProf = ProfesorRespuesta::all()->where('evaluado_id', $alumno->id)->where('comportamiento_id', $comportamiento->id);
            $respuestasAlum = AlumnoRespuesta::all()->where('evaluado_id', $alumno->id)->where('comportamiento_id', $comportamiento->id);
            
            foreach($respuestasAlum as $respuesta){
                if($respuesta->nota > 0){
                    if($respuesta->alumno_id != $alumno->id){ // alumnos
                        $pesos[1] += $respuesta->comportamiento->peso/100;
                        $data['grades'][1] += ($respuesta->nota-1)/3 * $respuesta->comportamiento->peso/100;
                    }
                    else{ // autoevaluacion
                        $pesos[0] += $respuesta->comportamiento->peso/100;
                        $data['grades'][0] += ($respuesta->nota-1)/3 * $respuesta->comportamiento->peso/100;
                    }
                }
            }

            foreach($respuestasProf as $respuesta){ //profesores
                if($respuesta->nota > 0){
                    $pesos[2] += $respuesta->comportamiento->peso/100;
                    $data['grades'][2] += ($respuesta->nota-1)/3 * $respuesta->comportamiento->peso/100;
                }
            }
        }

        for($i=0; $i<3; $i++){
            if($pesos[$i] > 0)
                $data['grades'][$i] = $data['grades'][$i]/$pesos[$i]*100;
            else
            $data['grades'][$i] = 0;
        }

        JavaScript::put([
            'data' => $data
        ]);

        return view('alumno.calificaciones.competencia', compact('alumno', 'competencia'));
    }
}
