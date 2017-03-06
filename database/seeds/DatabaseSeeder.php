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
        $this->call(CampiTableSeeder::class);
        $this->call(PlanesTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(ProfesoresTableSeeder::class);
        $this->call(CompetenciasTableSeeder::class);
        $this->call(ActividadesTableSeeder::class);
        $this->call(ActividadesCompetenciasTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(ActividadesAlumnosTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(AlumnosEquiposTableSeeder::class);
        $this->call(CRNsTableSeeder::class);
        $this->call(AlumnosCRNsTableSeeder::class);
        $this->call(ComportamientosTableSeeder::class);
        $this->call(AlumnosRespuestasTableSeeder::class);
        $this->call(ProfesoresRespuestasTableSeeder::class);







        
    }
}
