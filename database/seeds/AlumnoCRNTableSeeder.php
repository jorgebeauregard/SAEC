<?php

use Illuminate\Database\Seeder;

class AlumnoCRNTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno_crn')->insert([
        	'crn_id'=>1,
        	'alumno_id'=>1,
        ]);

        DB::table('alumno_crn')->insert([
        	'crn_id'=>2,
<<<<<<< HEAD
        	'alumno_id'=>2,
=======
        	'alumno_id'=>1,
>>>>>>> c01759f2a2621c317a5d77e1a770ba22ed143e1d
        ]);

        DB::table('alumno_crn')->insert([
        	'crn_id'=>3,
<<<<<<< HEAD
        	'alumno_id'=>3,
        ]);

        DB::table('alumno_crn')->insert([
            'crn_id'=>4,
            'alumno_id'=>4,
        ]);

        DB::table('alumno_crn')->insert([
            'crn_id'=>5,
            'alumno_id'=>5,
=======
        	'alumno_id'=>1,
        ]);

        DB::table('alumno_crn')->insert([
            'crn_id'=>4,
            'alumno_id'=>1,
>>>>>>> c01759f2a2621c317a5d77e1a770ba22ed143e1d
        ]);
    }
}
