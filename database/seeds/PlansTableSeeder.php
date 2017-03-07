<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
        	'nombre'=>'ITC11',
        	'descripcion'=>'Ingenieria en Tecnologias Computacionales',
        ]);

        DB::table('plans')->insert([
        	'nombre'=>'ISD11',
        	'descripcion'=>'Ingenieria en Sistemas Digitales y Robotica',
        ]);

        DB::table('plans')->insert([
        	'nombre'=>'LAD11',
        	'descripcion'=>'Licenciatura en Animacion Digital',
        ]);
    }
}
