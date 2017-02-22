<?php
use Illuminate\Database\Seeder;
class RespuestasProfesoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respuestas_profesores')->insert([
        	'actividad_id' => 1,
        	'profesor_id' => 1, //Mate 1
        	'alumno_id' => 1,
        	'comportamiento_id' => 1,
        	'nota' => 10,
        	'comentario' => 'El alumno se vio proponiendo ideas y asignando tareas',
        ]);
        DB::table('respuestas_profesores')->insert([
        	'actividad_id' => 2,
        	'profesor_id' => 3, //Progra
        	'alumno_id' => 2,
        	'comportamiento_id' => 2,
        	'nota' => 9,
        	'comentario' => 'El alumno propuso la solucion al problema',
        ]);
        DB::table('respuestas_profesores')->insert([
        	'actividad_id' => 3,
        	'profesor_id' => 2, //Fisica
        	'alumno_id' => 1,
        	'comportamiento_id' => 3,
        	'nota' => 1,
        	'comentario' => 'El alumno no puso atencion a las instrucciones y no trabajo en la clase',
        ]);
    }
}