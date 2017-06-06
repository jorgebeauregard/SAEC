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
            'apellido_paterno' => 'Beauregard',
            'apellido_materno'=> 'Nose',
            'prom_anterior' => 95.20,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 1,
    	]);

         DB::table('alumnos')->insert([
        	'matricula' => 'A01321231',
            'nombre' => 'Carlos',
            'apellido_paterno' => 'Amador',
            'apellido_materno'=> 'Manilla',
            'prom_anterior' => 32.09,
            'campus_id' => 2,
            'plan_id' => 2,
            'genero' => 2,
            'user_id' => 2,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321232',
            'nombre' => 'Angel',
            'apellido_paterno' => 'Ruiz',
            'apellido_materno'=> 'Mendoza',
            'prom_anterior' => 100.00,
            'campus_id' => 3,
            'plan_id' => 3,
            'genero' => 1,
            'user_id' => 3,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321233',
            'nombre' => 'Alejandro',
            'apellido_paterno' => 'Hernandez',
            'apellido_materno'=> 'Vazquez',
            'prom_anterior' => 95.38,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 1,
            'user_id' => 4,
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321234',
            'nombre' => 'Adrian',
            'apellido_paterno' => 'Hernandez',
            'apellido_materno'=> 'Vazquez',
            'prom_anterior' => 93.58,
            'campus_id' => 2,
            'plan_id' => 2,
            'genero' => 1,
            'user_id' => 5,
    	]);
    }
}
