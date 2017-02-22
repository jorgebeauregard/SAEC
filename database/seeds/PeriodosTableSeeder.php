<?php

use Illuminate\Database\Seeder;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('periodos')->insert([
        	'nombre'=>'E 16',
        ]);

        DB::table('periodos')->insert([
        	'nombre'=>'A 16',
        ]);

        DB::table('periodos')->insert([
        	'nombre'=>'E 17',
        ]);
    }
}
