<?php

use Illuminate\Database\Seeder;

class SeedEquipo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipo')->insert([
        	'numero_equipo' => 1,
        	'id_actividad' => 3,
        ]);

        DB::table('equipo')->insert([
        	'numero_equipo' => 2,
        	'id_actividad' => 3,
        ]);

        DB::table('equipo')->insert([
        	'numero_equipo' => 3,
        	'id_actividad' => 3,
        ]);

        DB::table('equipo')->insert([
        	'numero_equipo' => 2,
        	'id_actividad' => 1,
        ]);

        DB::table('equipo')->insert([
        	'numero_equipo' => 1,
        	'id_actividad' => 2,
        ]);
    }
}
