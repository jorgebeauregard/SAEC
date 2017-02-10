<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
        $this->call(seeder_materia::class);
        $this->call(seeder_plan::class);
        $this->call(seeder_campus::class);
        $this->call(seeder_periodo::class);
        $this->call(seeder_competencia::class);
        $this->call(seeder_crn::class);
        $this->call(seeder_comportamiento::class);
        $this->call(seeder_profesor::class);
        $this->call(seeder_alumno::class);
        $this->call(seeder_crn_alumno::class);
    }
}
