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
            'id_plan' => 2,
            'genero' => 1,
            'contrasena' => 'contrasena'
    	]);

        DB::table('alumno')->insert([
        	'matricula' => 'A01321236',
            'nombre' => 'Maria',
            'apellido' => 'Morales',
            'prom_anterior' => 86.52,
            'id_campus' => 1,
            'id_plan' => 3,
            'genero' => 0,
            'contrasena' => 'contrasena'
    	]);
    }
}
