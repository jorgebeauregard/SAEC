<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
        	'clave' => 'MA1001',
        	'nombre' => 'Matematicas 1',
    	]);

        DB::table('materias')->insert([
        	'clave' => 'TI1001',
        	'nombre' => 'Fundamentos de programacion', 
    	]);

        DB::table('materias')->insert([
        	'clave' => 'FI1001',
        	'nombre' => 'Fisica 1',
    	]);

        DB::table('materias')->insert([
        	'clave' => 'MA1006',
        	'nombre' => 'Probabilidad y estadistica',
    	]);

        DB::table('materias')->insert([
        	'clave' => 'TC1020',
        	'nombre' => 'Bases de datos',
    	]);
    }
}
