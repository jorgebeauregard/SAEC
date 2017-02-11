<?php

use Illuminate\Database\Seeder;

class SeedPlan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan')->insert([
        	'nombre'=>'ITC11',
        	'descripcion'=>'Ingeniería en Tecnologías Computacionales',
        ]);

        DB::table('plan')->insert([
        	'nombre'=>'ISD11',
        	'descripcion'=>'Ingeniería en Sistemas Digitales y Robótica',
        ]);

        DB::table('plan')->insert([
        	'nombre'=>'LAD11',
        	'descripcion'=>'Licenciatura en Animación Digital',
        ]);
    }
}
