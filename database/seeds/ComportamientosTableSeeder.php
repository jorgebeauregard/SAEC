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
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Felicitó a los integrantes que lograron algo importante?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Apoyó a algún integrante que no pudo terminar la tarea?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Escuchó atentamente las ideas de los demás?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Motivó a los integrantes para dar lo mejor de si mismos?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Utilizó un lenguaje sencillo?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Delegó tareas a los integrantes?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Identificó cómo te sentías haciéndote preguntas al respecto?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 1,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Obtuvo la inforamción de fuentes confiables',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Contrastó la información obetenida de diferentes fuentes?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿La información que obtuvo es importante para la solución del problema',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Justificó las actividades que propuso?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);


        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Siguió una serie de pasos a la hora de hacer el problema?',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Participó siempre en el proceso de solución del problema?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Aportó ideas que contribuyeran a solucionar el problema?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Permitió que los compañeros expresaran sus ideas?',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Retroalimentó a sus compañeros de manera respetuosa?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Planteó ideas claras relacionadas con el problema?',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
        	'pregunta'=>'¿Elaboró conclusiones coherentes respecto al problema?',
        	'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Fue capaz de defender sus conclusiones ante las demás?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);

        DB::table('comportamientos')->insert([
            'pregunta'=>'¿Profundizó en áreas de conocimiento que no dominaba para resolver el problema?',
            'descripcion'=>'Utilizó sus conocimientos y habilidades para ayudar a algún compañero de equipo que tuviera alguna duda',
            'competencia_id'=> 2,
        ]);


    }
}
