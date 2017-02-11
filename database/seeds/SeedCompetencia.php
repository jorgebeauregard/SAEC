<?php

use Illuminate\Database\Seeder;

class SeedCompetencia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencia')->insert([
        	'nombre' => 'Liderazgo',
            'descripcion' => 'Capacidad de influenciar a sus compañeros de equipo.'
    	]);

        DB::table('competencia')->insert([
        	'nombre' => 'Trabajo en equipo',
            'descripcion' => 'Capacidad de colaborar con sus compañeros.'
    	]);

        DB::table('competencia')->insert([
        	'nombre' => 'Innovacion',
            'descripcion' => 'Capacidad de crear soluciones novedosas y utiles.'
    	]);
    }
}
