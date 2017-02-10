<?php

use Illuminate\Database\Seeder;

class seeder_materia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materia')->insert([
        	'clave' => 'MA1001',
        	'nombre' => 'Matematicas 1' 
    	]);

        DB::table('materia')->insert([
        	'clave' => 'TI1001',
        	'nombre' => 'Fundamentos de programación' 
    	]);

        DB::table('materia')->insert([
        	'clave' => 'FI1001',
        	'nombre' => 'Fisica 1' 
    	]);
    }
}
