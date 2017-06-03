<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
        	'matricula' => 'A01321230',
            'nombre' => 'Julian',
            'apellido' => 'Beauregard',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 1,
    	]);
    }
}
