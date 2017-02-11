<?php

use Illuminate\Database\Seeder;

class SeedPeriodo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('periodo')->insert([
        	'nombre'=>'E 16',
        ]);

        DB::table('periodo')->insert([
        	'nombre'=>'A 16',
        ]);

        DB::table('periodo')->insert([
        	'nombre'=>'E 17',
        ]);
    }
}
