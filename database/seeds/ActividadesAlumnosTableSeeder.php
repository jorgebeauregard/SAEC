<?php

use Illuminate\Database\Seeder;

class ActividadesAlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades_alumnos')->insert([
        	'actividad_id' =>3,
        	'alumno_id' => 1,
        	'completada' => 1,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' =>3 ,
        	'alumno_id' => 2,
        	'completada' => 1,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' => 3,
        	'alumno_id' => 2,
        	'completada' => 0,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' => 3,
        	'alumno_id' => 3,
        	'completada' => 0,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' =>3 ,
        	'alumno_id' => 1,
        	'completada' => 1,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' => 3,
        	'alumno_id' => 2,
        	'completada' => 1,
        ]);

        DB::table('actividades_alumnos')->insert([
        	'actividad_id' => 3,
        	'alumno_id' => 3,
        	'completada' => 1,
        ]);
        /*This is a party
        ...will finish later
        DB::table('actividades_alumnos')->insert([
        	'actividad_id' => ,
        	'alumno_id' => ,
        	'completada' => ,
        ]);
        */
    }
}
