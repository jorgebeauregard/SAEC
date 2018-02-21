<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comportamiento;
use App\Competencia;
use App\ProfesorRespuesta;
use App\AlumnoRespuesta;
use Illuminate\Support\Facades\Auth;
use JavaScript;

class AlumnoController extends Controller
{
    public function grades(){
        $logged = Auth::user()->alumno[0];
        $competences = Competencia::all();
        $data = array();
        $data['names'] = array();
        $data['grades'] = array();

        foreach($competences as $competence){
            $comportamientos = Comportamiento::all()->where('competencia_id', $competence->id);
            $suma = 0;
            $sumaPesos = 0;
            foreach($comportamientos as $comportamiento){
                $respuestasP = ProfesorRespuesta::all()->where('evaluado_id', $logged->id)->where('comportamiento_id', $comportamiento->id);
                $respuestasA = AlumnoRespuesta::all()->where('evaluado_id', $logged->id)->where('comportamiento_id', $comportamiento->id);
                
                foreach($respuestasP as $respuesta){
                    if($respuesta->nota > 0){
                        $sumPesos += $respuesta->competencia->peso/100;
                        $suma += $respuesta->nota * $respuesta->competencia->peso/100;
                    }
                }

                foreach($respuestasA as $respuesta){
                    if($respuesta->nota > 0){
                        $sumPesos += $respuesta->competencia->peso/100;
                        $suma += $respuesta->nota * $respuesta->competencia->peso/100;
                    }
                }
            }
            
            array_push($data['names'], $competence->nombre);
            if($sumaPesos > 0){
                $calificacion = $suma / $sumaPesos;
                array_push($data['grades'], $calificacion*100);
            }
            else{
                array_push($data['grades'], 0);
            }
        }

        JavaScript::put([
            'data' => $data
        ]);

        return view('alumno.calificaciones.index');
    }
}
