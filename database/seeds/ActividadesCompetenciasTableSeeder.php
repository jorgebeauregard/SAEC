<?php

use Illuminate\Database\Seeder;

class ActividadesCompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades_competencias')->insert([
        	'actividad_id' => 1,
            'competencia_id' => 1,
    	]);

    	DB::table('actividades_competencias')->insert([
        	'actividad_id' => 2,
            'competencia_id' => 2,
    	]);

    	DB::table('actividades_competencias')->insert([
        	'actividad_id' => 3,
            'competencia_id' => 3,
    	]);
    }
}
