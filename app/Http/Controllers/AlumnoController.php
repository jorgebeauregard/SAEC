<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comportamiento;
use App\Cmpetencia;
use App\ProfesorRespuesta;
use JavaScript;

class AlumnoController extends Controller
{
    public function grades(){
        $logged = Auth::user()->alumno[0];
        $competences = Comepetencia::all();
        $data = array();

        foreach($competences as $competence){
            $comportamientos = Comportamiento::all()->where('competencia_id', $competence->id);
            foreach($comportamientos as $comportamiento){
                $suma = 0;
                $sumaPesos = 0;

                $respuestasP = ProfesorRespuesta::all()->where('evaluado_id', $logged->id)->where('comportamiento_id', $comportamiento_id);
                $respuestasA = AlumnoRespuesta::all()->where('evaluado_id', $logged->id)->where('comportamiento_id', $comportamiento_id);
                
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
                $calificacion = $suma / $sumaPesos;
                array_push($data, array('comportamiento' => $comportamiento->name, 'calificacion' => $calificacion));
            }
        }

        JavaScript::put([
            'data' => $data
        ]);

        return view('alumno.calificaciones.index');
    }
}
