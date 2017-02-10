<?php

use Illuminate\Database\Seeder;

class seeder_crn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crn')->insert([
        	'id_materia'=>1,
        	'id_periodo'=>2,
        	'id_profesor'=>3,
        	'grupo'=>1,
        ]);

        DB::table('crn')->insert([
        	'id_materia'=>1,
        	'id_periodo'=>2,
        	'id_profesor'=>2,
        	'grupo'=>2,
        ]);

        DB::table('crn')->insert([
        	'id_materia'=>2,
        	'id_periodo'=>3,
        	'id_profesor'=>1,
        	'grupo'=>1,
        ]);

        DB::table('crn')->insert([
        	'id_materia'=>3,
        	'id_periodo'=>1,
        	'id_profesor'=>1,
        	'grupo'=>1,
        ]);
    }
}
