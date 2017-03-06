<?php

use Illuminate\Database\Seeder;

class AlumnosCRNsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos_crns')->insert([
        	'crn_id'=>1,
        	'alumno_id'=>1,
        ]);

        DB::table('alumnos_crns')->insert([
        	'crn_id'=>2,
        	'alumno_id'=>3,
        ]);

        DB::table('alumnos_crns')->insert([
        	'crn_id'=>3,
        	'alumno_id'=>2,
        ]);

        DB::table('alumnos_crns')->insert([
            'crn_id'=>4,
            'alumno_id'=>1,
        ]);
    }
}
