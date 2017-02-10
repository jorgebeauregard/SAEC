<?php

use Illuminate\Database\Seeder;

class seeder_profesor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor')->insert([
        	'nomina' => 'L012345678',
            'nombre' => 'Abel',
            'apellido' => 'Flores',
            'correo' => 'aflores@itesm.mx',
            'contrasena' => 'contrasena'
    	]);

        DB::table('profesor')->insert([
        	'nomina' => 'L012345679',
            'nombre' => 'Alberto',
            'apellido' => 'Oliart',
            'correo' => 'aoliarts@itesm.mx',
            'contrasena' => 'contrasena'
    	]);

        DB::table('profesor')->insert([
        	'nomina' => 'L012345680',
            'nombre' => 'Daniel',
            'apellido' => 'Perez',
            'correo' => 'danperez@itesm.mx',
            'contrasena' => 'contrasena'
    	]);

    }
}
