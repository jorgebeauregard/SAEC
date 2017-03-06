<?php

use Illuminate\Database\Seeder;

class AlumnosEquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 1,
        	'alumno_id' => 1,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 1,
        	'alumno_id' => 2,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 2,
        	'alumno_id' => 2,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 2,
        	'alumno_id' => 3,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 3,
        	'alumno_id' => 1,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 3,
        	'alumno_id' => 2,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 3,
        	'alumno_id' => 3,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 4,
        	'alumno_id' => 1,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 4,
        	'alumno_id' => 3,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 5,
        	'alumno_id' => 1,
        ]);

        DB::table('alumnos_equipos')->insert([
        	'equipo_id' => 5,
        	'alumno_id' => 2,
        ]);
    }
}
