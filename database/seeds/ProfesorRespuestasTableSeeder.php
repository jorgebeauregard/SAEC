<?php

use Illuminate\Database\Seeder;

class ProfesorRespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor_respuestas')->insert([
        	'actividad_id' => 1,
        	'profesor_id' => 1, //Mate 1
        	'evaluado_id' => 1,
        	'comportamiento_id' => 1,
        	'nota' => 10,
        	'comentario' => 'El alumno se vio proponiendo ideas y asignando tareas',
        ]);

        DB::table('profesor_respuestas')->insert([
        	'actividad_id' => 2,
        	'profesor_id' => 3, //Progra
        	'evaluado_id' => 2,
        	'comportamiento_id' => 2,
        	'nota' => 9,
        	'comentario' => 'El alumno propuso la solucion al problema',
        ]);

        DB::table('profesor_respuestas')->insert([
        	'actividad_id' => 3,
        	'profesor_id' => 2, //Fisica
        	'evaluado_id' => 1,
        	'comportamiento_id' => 3,
        	'nota' => 1,
        	'comentario' => 'El alumno no puso atencion a las instrucciones y no trabajo en la clase',
        ]);
    }
}
