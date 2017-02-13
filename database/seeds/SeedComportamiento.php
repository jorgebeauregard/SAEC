<?php

use Illuminate\Database\Seeder;

class SeedComportamiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comportamiento')->insert([
        	'pregunta'=>'¿Es capaz de asignar trabajos a los companeros?',
        	'descripcion'=>'Toma el control y...',
        ]);

        DB::table('comportamiento')->insert([
        	'pregunta'=>'¿Dio ideas?',
        	'descripcion'=>'Intentó dar soluciones...',
        ]);

        DB::table('comportamiento')->insert([
        	'pregunta'=>'¿Trabajó?',
        	'descripcion'=>'¿Hizo algo o no?',
        ]);

    }
}
