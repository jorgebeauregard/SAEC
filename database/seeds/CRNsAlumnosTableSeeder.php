<?php

use Illuminate\Database\Seeder;

class CRNsAlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crns_alumnos')->insert([
        	'crn_id'=>1,
        	'alumno_id'=>1,
        	'faltas'=>3,
        ]);

        DB::table('crns_alumnos')->insert([
        	'crn_id'=>2,
        	'alumno_id'=>3,
        	'faltas'=>1,
        ]);

        DB::table('crns_alumnos')->insert([
        	'crn_id'=>3,
        	'alumno_id'=>2,
        	'faltas'=>0,
        ]);

        DB::table('crns_alumnos')->insert([
            'crn_id'=>4,
            'alumno_id'=>1,
            'faltas'=>0,
        ]);
    }
}
