<?php

use Illuminate\Database\Seeder;

class CampiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campi')->insert([
        	'nombre' => 'Puebla',
    	]);

        DB::table('campi')->insert([
        	'nombre' => 'Ciudad de Mexico',
    	]);

        DB::table('campi')->insert([
        	'nombre' => 'Monterrey',
    	]);
    }
}
