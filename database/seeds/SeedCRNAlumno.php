<?php

use Illuminate\Database\Seeder;

class SeedCRNAlumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crn_alumno')->insert([
        	'id_crn'=>1,
        	'id_alumno'=>1,
        	'faltas'=>3,
        ]);

        DB::table('crn_alumno')->insert([
        	'id_crn'=>2,
        	'id_alumno'=>3,
        	'faltas'=>1,
        ]);

        DB::table('crn_alumno')->insert([
        	'id_crn'=>3,
        	'id_alumno'=>2,
        	'faltas'=>0,
        ]);

        DB::table('crn_alumno')->insert([
            'id_crn'=>4,
            'id_alumno'=>1,
            'faltas'=>0,
        ]);
    }
}
