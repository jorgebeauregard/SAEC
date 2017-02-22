<?php

use Illuminate\Database\Seeder;

class CompetenciasComportamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias_comportamientos')->insert([
            'competencia_id' => 3,
            'comportamiento_id' => 2,
        ]);

        DB::table('competencias_comportamientos')->insert([
            'competencia_id' => 2,
            'comportamiento_id' => 3,
        ]);

        DB::table('competencias_comportamientos')->insert([
            'competencia_id' => 1,
            'comportamiento_id' => 1,
        ]);
    }
} 