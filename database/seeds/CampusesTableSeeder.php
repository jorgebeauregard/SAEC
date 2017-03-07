<?php

use Illuminate\Database\Seeder;

class CampusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campuses')->insert([
        	'nombre' => 'Puebla',
    	]);

        DB::table('campuses')->insert([
        	'nombre' => 'Ciudad de Mexico',
    	]);

        DB::table('campuses')->insert([
        	'nombre' => 'Monterrey',
    	]);
    }
}
