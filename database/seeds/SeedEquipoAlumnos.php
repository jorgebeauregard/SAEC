<?php

use Illuminate\Database\Seeder;

class SeedEquipoAlumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 1,
        	'id_alumnos' => 1,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 1,
        	'id_alumnos' => 2,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 2,
        	'id_alumnos' => 2,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 2,
        	'id_alumnos' => 3,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 3,
        	'id_alumnos' => 1,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 3,
        	'id_alumnos' => 2,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 3,
        	'id_alumnos' => 3,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 4,
        	'id_alumnos' => 1,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 4,
        	'id_alumnos' => 3,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 5,
        	'id_alumnos' => 1,
        ]);

        DB::table('equipo_alumnos')->insert([
        	'id_equipo' => 5,
        	'id_alumnos' => 2,
        ]);
    }
}
