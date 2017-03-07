<?php

use Illuminate\Database\Seeder;

class CompetenciaComportamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencia_comportamiento')->insert([
            'competencia_id' => 3,
            'comportamiento_id' => 2,
        ]);

        DB::table('competencia_comportamiento')->insert([
            'competencia_id' => 2,
            'comportamiento_id' => 3,
        ]);

        DB::table('competencia_comportamiento')->insert([
            'competencia_id' => 1,
            'comportamiento_id' => 1,
        ]);
    }
} 