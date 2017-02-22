<?php

use Illuminate\Database\Seeder;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert([
        	'nombre'=>'ITC11',
        	'descripcion'=>'Ingenieria en Tecnologias Computacionales',
        ]);

        DB::table('planes')->insert([
        	'nombre'=>'ISD11',
        	'descripcion'=>'Ingenieria en Sistemas Digitales y Robotica',
        ]);

        DB::table('planes')->insert([
        	'nombre'=>'LAD11',
        	'descripcion'=>'Licenciatura en Animacion Digital',
        ]);
    }
}
