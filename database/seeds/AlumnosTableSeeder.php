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
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321231',
            'nombre' => 'Guillermo',
            'apellido' => 'Jimenez',
            'prom_anterior' => 85.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321232',
            'nombre' => 'Maria',
            'apellido' => 'Gomez',
            'prom_anterior' => 92.00,
            'campus_id' => 1,
            'plan_id' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321233',
            'nombre' => 'Alejandra',
            'apellido' => 'Delgado',
            'prom_anterior' => 96.00,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321234',
            'nombre' => 'Jorge',
            'apellido' => 'Perez',
            'prom_anterior' => 100.00,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321235',
            'nombre' => 'Miguel',
            'apellido' => 'Sevilla',
            'prom_anterior' => 81.54,
            'campus_id' => 2,
            'plan_id' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321236',
            'nombre' => 'Fernanda',
            'apellido' => 'Morales',
            'prom_anterior' => 86.52,
            'campus_id' => 1,
            'plan_id' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumnos')->insert([
        	'matricula' => 'A01321237',
            'nombre' => 'Martin',
            'apellido' => 'Ibarra',
            'prom_anterior' => 87.50,
            'campus_id' => 1,
            'plan_id' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);
    }
}
