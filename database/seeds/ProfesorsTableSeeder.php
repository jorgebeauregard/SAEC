<?php

use Illuminate\Database\Seeder;

class ProfesorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('profesors')->insert([
        	'nomina' => 'L023456789',
            'nombre' => 'Graciela',
            'apellido' => 'Maldonado',
            'correo' => 'gmc@itesm.mx',
            'user_id' => 53,
    	]);
    
        
        DB::table('profesors')->insert([
            'nomina' => 'L012345678',
            'nombre' => 'Adriana',
            'apellido' => 'Amozurrutia Elizalde',
            'correo' => 'aamozurrutia@itesm.mx',
            'user_id' => 54,
        ]);
    }
}