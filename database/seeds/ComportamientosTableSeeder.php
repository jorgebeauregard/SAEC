<?php

use Illuminate\Database\Seeder;

class ComportamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Analizó todo el contexto para resolver el problema?',
            'descripcion'=>'Analiza el problema a resolver con una visión global pero utiliza acciones locales para resolverlo.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Felicitó a los integrantes que lograron algo importante?',
            'descripcion'=>'Logra motivar y reconocer de manera positiva a todos los  miembros del equipo para actuar sin resistencias.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Apoyó a algún integrante que no pudo terminar la tarea?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Escuchó atentamente las ideas de los demás?',
            'descripcion'=>'Respeta y toma en cuenta las opiniones de todo el equipo, propiciando la mejora de las aportaciones.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Motivó a los integrantes para dar lo mejor de si mismos?',
            'descripcion'=>'Genera un sentido de identidad entre los miembros del equipo y un compromiso para con el proyecto.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Utilizó un lenguaje sencillo?',
            'descripcion'=>'Expresa sus ideas verbales y escritas de manera completa y clara a lo largo del proyecto.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Delegó tareas a los integrantes?',
            'descripcion'=>'Asigna y reparte de manera eficiente los roles y/o actividades entre los miembros del equipo, participando activamente en las actividades a desarrollar.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Identificó cómo te sentías haciéndote preguntas al respecto?',
            'descripcion'=>'Percibe y reconoce las emociones de los demás y las canaliza positivamente para el logro de objetivos.',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Obtuvo la inforamción de fuentes confiables',
        	'descripcion'=>'Argumenta la validez de la información obtenida de diferentes fuente.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Contrastó la información obetenida de diferentes fuentes?',
            'descripcion'=>'Obtiene información de diferentes fuentes,  revisa  la validez y  selecciona adecuadamente qué información utilizará.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿La información que obtuvo es importante para la solución del problema',
            'descripcion'=>'Argumenta la relevancia de la información para la solución del problema.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Justificó las actividades que propuso?',
            'descripcion'=>'Identifica los componentes y alternativas de solución del problema y lo expresa.',
            'competencia_id'=> 2,
        ]);


        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Siguió una serie de pasos a la hora de hacer el problema?',
        	'descripcion'=>'Comprende el problema central, sigue las instrucciones brindadas e infiere los pasos a seguir en caso de no estar especificados.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Participó siempre en el proceso de solución del problema?',
            'descripcion'=>'Se involucra en las actividades aportando ideas nuevas y realizando análisis o síntesis de la información brindada.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Aportó ideas que contribuyeran a solucionar el problema?',
            'descripcion'=>'Se involucra en las actividades aportando ideas nuevas y realizando análisis o síntesis de la información brindada.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Permitió que los compañeros expresaran sus ideas?',
        	'descripcion'=>'Identifica la relevancia de las aportaciones de los demás, implicando que las ha escuchado.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Retroalimentó a sus compañeros de manera respetuosa?',
            'descripcion'=>'No interrumpe las opiniones de los demás y retroalimenta respetuosamente y con sustento.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Planteó ideas claras relacionadas con el problema?',
        	'descripcion'=>'Plantea preguntas claras que promueven una reflexión en el equipo encaminada a solucionar el problema.',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Elaboró conclusiones coherentes respecto al problema?',
        	'descripcion'=>'Contrasta distintos puntos de vista para elaborar conclusiones justificadas, coherentes y relevantes. ',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Fue capaz de defender sus conclusiones ante las demás?',
            'descripcion'=>'Es capaz de expresar sus conclusiones con claridad. ',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Profundizó en áreas de conocimiento que no dominaba para resolver el problema?',
            'descripcion'=>'Identifica información y destrezas necesarias para la solución del problema, diferencia cuáles de éstas debe adquirir. Adquiere la información y destrezas necesarias para resolver el problema y las utiliza.',
            'competencia_id'=> 2,
        ]);


    }
}
