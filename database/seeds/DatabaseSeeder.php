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
        $this->call(SeedMateria::class);
        $this->call(SeedPlan::class);
        $this->call(SeedCampus::class);
        $this->call(SeedPeriodo::class);
        $this->call(SeedProfesor::class);
        $this->call(SeedCompetencia::class);
        $this->call(SeedCRN::class);
        $this->call(SeedComportamiento::class);        
        $this->call(SeedAlumno::class);
        $this->call(SeedCRNAlumno::class);
        $this->call(SeedActividad::class);
        $this->call(SeedEquipo::class);
        $this->call(SeedCompetenciaComportamientos::class);
        $this->call(SeedEquipoAlumnos::class);
        $this->call(SeedRespuestasAlumno::class);
        $this->call(SeedRespuestasProfesor::class);
        
    }
}
