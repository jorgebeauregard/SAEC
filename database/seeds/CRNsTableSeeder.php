<?php

use Illuminate\Database\Seeder;

class CRNsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crns')->insert([
			'nombre' => 'Matemáticas 3-1',
        	'periodo_id'=>3,
        	'profesor_id'=>1,
        ]);

		DB::table('crns')->insert([
			'nombre' => 'Mat/EyM',
        	'periodo_id'=>3,
        	'profesor_id'=>1,
        ]);

		DB::table('crns')->insert([
			'nombre' => 'Electricidad y Magnetismo',
        	'periodo_id'=>3,
        	'profesor_id'=>1,
        ]); 
        
    }
}
