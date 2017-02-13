<?php

use Illuminate\Database\Seeder;

class SeedCompetenciaComportamientos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencia_comportamientos')->insert([
            'id_competencia' => 3,
            'id_comportamiento' => 2,
        ]);

        DB::table('competencia_comportamientos')->insert([
            'id_competencia' => 2,
            'id_comportamiento' => 3,
        ]);

        DB::table('competencia_comportamientos')->insert([
            'id_competencia' => 1,
            'id_comportamiento' => 1,
        ]);
    }
} 