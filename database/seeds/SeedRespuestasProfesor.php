<?php

use Illuminate\Database\Seeder;

class SeedRespuestasProfesor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respuestas_profesor')->insert([
        	'id_actividad' => 1,
        	'id_profesor' => 1, //Mate 1
        	'id_evaluado' => 1,
        	'id_comportamiento' => 1,
        	'nota' => 10,
        	'comentario' => 'El alumno se vio proponiendo ideas y asignando tareas',
        ]);

        DB::table('respuestas_profesor')->insert([
        	'id_actividad' => 2,
        	'id_profesor' => 3, //Progra
        	'id_evaluado' => 2,
        	'id_comportamiento' => 2,
        	'nota' => 9,
        	'comentario' => 'El alumno propuso la solucion al problema',
        ]);

        DB::table('respuestas_profesor')->insert([
        	'id_actividad' => 3,
        	'id_profesor' => 2, //Fisica
        	'id_evaluado' => 1,
        	'id_comportamiento' => 3,
        	'nota' => 1,
        	'comentario' => 'El alumno no puso atencion a las instrucciones y no trabajo en la clase',
        ]);
    }
}
