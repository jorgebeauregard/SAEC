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
        $this->call(RolesTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
        $this->call(CampusesTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(ProfesorsTableSeeder::class);
        $this->call(CompetenciasTableSeeder::class);
        $this->call(ActividadsTableSeeder::class);
        $this->call(ActividadCompetenciaTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(AlumnoEquipoTableSeeder::class);
        $this->call(CRNsTableSeeder::class);
        $this->call(AlumnoCRNTableSeeder::class);
        $this->call(ComportamientosTableSeeder::class);
        $this->call(AlumnoRespuestasTableSeeder::class);
        $this->call(ProfesorRespuestasTableSeeder::class);    
        $this->call(ActividadAlumnoTableSeeder::class); 

    }
}
