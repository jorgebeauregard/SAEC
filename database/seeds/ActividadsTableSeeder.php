<?php

use Illuminate\Database\Seeder;

class ActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividads')->insert([
        	'nombre' => 'Colaborativo 1 Parcial 2',
        	'descripcion' => 'El alumno formara equipos para resolver los ejercicios de funciones inversas y logaritmos',
        	'profesor_id' => 1,
        	'fecha_limite' => '2014-05-12 16:50',
        ]);

        DB::table('actividads')->insert([
        	'nombre' => 'Actividad Individual 3 Parcial 1',
        	'descripcion' => 'El alumno hara un programa que obtenga los numeros primos de n a m usando un metodo recursivo que acceda a una criba para calcularlos',
        	'profesor_id' => 2,
        	'fecha_limite' => '2016-08-08 08:20',
        ]);

        DB::table('actividads')->insert([
        	'nombre' => 'Tarea 1 Parcial 1',
        	'descripcion' => 'El alumno obtendra el torque y la inercia rotacional de marte mientras se desplaza a una distancia definida de la galaxia andromeda usando formulas de cinematica, despreciando la resistencia al aire',
        	'profesor_id' => 3,
        	'fecha_limite' => '2004-04-01 12:35',
        ]);
    }
}
