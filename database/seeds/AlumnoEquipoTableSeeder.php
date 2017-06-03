<?php

use Illuminate\Database\Seeder;

class AlumnoEquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno_equipo')->insert([
        	'equipo_id' => 1,
        	'alumno_id' => 1,
        ]);

        DB::table('alumno_equipo')->insert([
          	'equipo_id' => 2,
          	'alumno_id' => 1,
          ]);
  
          DB::table('alumno_equipo')->insert([
          	'equipo_id' => 3,
          	'alumno_id' => 1,
          ]);
    }
}
