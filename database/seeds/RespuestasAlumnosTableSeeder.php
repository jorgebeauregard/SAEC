<?php

use Illuminate\Database\Seeder;

class RespuestasAlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 1,
        	'evaluador_id' => 1,
        	'evaluado_id' => 3,
        	'comportamiento_id' => 3,
        	'nota' => 7,
        	'comentario' => 'No trabaja pero consiguio las respuestas de internet',
        ]);

        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 1,
        	'evaluador_id' => 3,
        	'evaluado_id' => 1,
        	'comportamiento_id' => 1,
        	'nota' => 10,
        	'comentario' => 'Me dijo que consiguiera las respuestas de la mitad de la tarea y eso hice',
        ]);

        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 2,
        	'evaluador_id' => 1,
        	'evaluado_id' => 2,
        	'comportamiento_id' => 2,
        	'nota' => 5,
        	'comentario' => 'Propuso ir a la empresa de su hermano para conseguir ayuda de su amigo programador',
        ]);

        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 2,
        	'evaluador_id' => 2,
        	'evaluado_id' => 1,
        	'comportamiento_id' => 2,
        	'nota' => 2,
        	'comentario' => 'Tuve que pedirle ayuda a mi hermano porque no propuso ideas para resolver el problema y hacer el programa',
        ]);

        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 3,
        	'evaluador_id' => 1,
        	'evaluado_id' => 2,
        	'comportamiento_id' => 1,
        	'nota' => 9,
        	'comentario' => 'Buen lider',
        ]);

        DB::table('respuestas_alumnos')->insert([
        	'actividad_id' => 3,
        	'evaluador_id' => 2,
        	'evaluado_id' => 1,
        	'comportamiento_id' => 3,
        	'nota' => 8,
        	'comentario' => 'Si trabajo',
        ]);

        
    }
}
