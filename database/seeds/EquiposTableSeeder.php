<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
        	'numero_equipo' => 1,
        	'actividad_id' => 3,
        ]);

        DB::table('equipos')->insert([
        	'numero_equipo' => 2,
        	'actividad_id' => 3,
        ]);

        DB::table('equipos')->insert([
        	'numero_equipo' => 3,
        	'actividad_id' => 3,
        ]);

        DB::table('equipos')->insert([
        	'numero_equipo' => 2,
        	'actividad_id' => 1,
        ]);

        DB::table('equipos')->insert([
        	'numero_equipo' => 1,
        	'actividad_id' => 2,
        ]);
    }
}