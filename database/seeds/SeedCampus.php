<?php

use Illuminate\Database\Seeder;

class SeedCampus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus')->insert([
        	'nombre' => 'Puebla',
    	]);

        DB::table('campus')->insert([
        	'nombre' => 'Ciudad de Mexico',
    	]);

        DB::table('campus')->insert([
        	'nombre' => 'Monterrey',
    	]);
    }
}
