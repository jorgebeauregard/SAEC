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
        	'materia_id'=>1,
        	'periodo_id'=>2,
        	'profesor_id'=>1,
        	'grupo'=>1,
        ]);

        DB::table('crns')->insert([
        	'materia_id'=>2,
        	'periodo_id'=>2,
        	'profesor_id'=>2,
        	'grupo'=>2,
        ]);

        DB::table('crns')->insert([
        	'materia_id'=>3,
        	'periodo_id'=>3,
        	'profesor_id'=>3,
        	'grupo'=>1,
        ]);

        DB::table('crns')->insert([
        	'materia_id'=>4,
        	'periodo_id'=>1,
        	'profesor_id'=>4,
        	'grupo'=>1,
        ]);

         DB::table('crns')->insert([
        	'materia_id'=>5,
        	'periodo_id'=>1,
        	'profesor_id'=>5,
        	'grupo'=>1,
        ]);
    }
}
