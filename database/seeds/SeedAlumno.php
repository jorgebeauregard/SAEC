<?php

use Illuminate\Database\Seeder;

class SeedAlumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno')->insert([
        	'matricula' => 'A01321230',
            'nombre' => 'Julian',
            'apellido' => 'Beauregard',
            'prom_anterior' => 95.20,
            'id_campus' => 1,
            'id_plan' => 1,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321231',
            'nombre' => 'Guillermo',
            'apellido' => 'Jimenez',
            'prom_anterior' => 85.00,
            'id_campus' => 1,
            'id_plan' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321232',
            'nombre' => 'Maria',
            'apellido' => 'Gomez',
            'prom_anterior' => 92.00,
            'id_campus' => 1,
            'id_plan' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321233',
            'nombre' => 'Alejandra',
            'apellido' => 'Delgado',
            'prom_anterior' => 96.00,
            'id_campus' => 1,
            'id_plan' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321234',
            'nombre' => 'Jorge',
            'apellido' => 'Perez',
            'prom_anterior' => 100.00,
            'id_campus' => 1,
            'id_plan' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321235',
            'nombre' => 'Miguel',
            'apellido' => 'Sevilla',
            'prom_anterior' => 81.54,
            'id_campus' => 2,
            'id_plan' => 3,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321236',
            'nombre' => 'Fernanda',
            'apellido' => 'Morales',
            'prom_anterior' => 86.52,
            'id_campus' => 1,
            'id_plan' => 1,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321237',
            'nombre' => 'Martin',
            'apellido' => 'Ibarra',
            'prom_anterior' => 87.50,
            'id_campus' => 1,
            'id_plan' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);
    }
}
