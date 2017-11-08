<?php

use Illuminate\Database\Seeder;

class CompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias')->insert([
        	'nombre' => 'Liderazgo',
            'descripcion' => 'Capacidad de influenciar a sus compañeros de equipo.'
    	]);

        DB::table('competencias')->insert([
        	'nombre' => 'Trabajo en equipo',
            'descripcion' => 'Capacidad de colaborar con sus compañeros.'
    	]);

        DB::table('competencias')->insert([
        	'nombre' => 'Innovacion',
            'descripcion' => 'Capacidad de crear soluciones novedosas y utiles.'
    	]);

        DB::table('competencias')->insert([
            'nombre' => 'Pensamiento Critico',
            'descripcion' => 'Capacidad de pensar criticamente'
        ]);
    }
}
