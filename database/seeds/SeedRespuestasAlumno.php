<?php

use Illuminate\Database\Seeder;

class SeedRespuestasAlumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 1,
        	'id_evaluador' => 1,
        	'id_evaluado' => 3,
        	'id_comportamiento' => 3,
        	'nota' => 7,
        	'comentario' => 'No trabaja pero consiguio las respuestas de internet',
        ]);

        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 1,
        	'id_evaluador' => 3,
        	'id_evaluado' => 1,
        	'id_comportamiento' => 1,
        	'nota' => 10,
        	'comentario' => 'Me dijo que consiguiera las respuestas de la mitad de la tarea y eso hice',
        ]);

        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 2,
        	'id_evaluador' => 1,
        	'id_evaluado' => 2,
        	'id_comportamiento' => 2,
        	'nota' => 5,
        	'comentario' => 'Propuso ir a la empresa de su hermano para conseguir ayuda de su amigo programador',
        ]);

        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 2,
        	'id_evaluador' => 2,
        	'id_evaluado' => 1,
        	'id_comportamiento' => 2,
        	'nota' => 2,
        	'comentario' => 'Tuve que pedirle ayuda a mi hermano porque no propuso ideas para resolver el problema y hacer el programa',
        ]);

        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 3,
        	'id_evaluador' => 1,
        	'id_evaluado' => 2,
        	'id_comportamiento' => 1,
        	'nota' => 9,
        	'comentario' => 'Buen lider',
        ]);

        DB::table('respuestas_alumno')->insert([
        	'id_actividad' => 3,
        	'id_evaluador' => 2,
        	'id_evaluado' => 1,
        	'id_comportamiento' => 3,
        	'nota' => 8,
        	'comentario' => 'Si trabajo',
        ]);

        
    }
}
