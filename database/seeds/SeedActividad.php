<?php

use Illuminate\Database\Seeder;

class SeedActividad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividad')->insert([
        	'nombre' => 'Colaborativo 1 Parcial 2',
        	'descripcion' => 'El alumno formara equipos para resolver los ejercicios de funciones inversas y logaritmos',
        	'id_crn' => 1,
        ]);

        DB::table('actividad')->insert([
        	'nombre' => 'Actividad Individual 3 Parcial 1',
        	'descripcion' => 'El alumno hara un programa que obtenga los numeros primos de n a m usando un metodo recursivo que acceda a una criba para calcularlos',
        	'id_crn' => 3,
        ]);

        DB::table('actividad')->insert([
        	'nombre' => 'Tarea 1 Parcial 1',
        	'descripcion' => 'El alumno obtendra el torque y la inercia rotacional de marte mientras se desplaza a una distancia definida de la galaxia andromeda usando formulas de cinematica, despreciando la resistencia al aire',
        	'id_crn' => 4,
        ]);
    }
}
