<?php

use Illuminate\Database\Seeder;

class ActividadAlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividad_alumno')->insert([
        	'actividad_id' => 1,
        	'alumno_id' => 1,
        ]);

        DB::table('actividad_alumno')->insert([
        	'actividad_id' => 2,
        	'alumno_id' => 1,
        ]);

        DB::table('actividad_alumno')->insert([
        	'actividad_id' => 3,
        	'alumno_id' => 1,
        ]);
    }
}
