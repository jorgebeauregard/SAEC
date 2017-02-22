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
        $this->call(MateriasTableSeeder::class);
        $this->call(PlanesTableSeeder::class);
        $this->call(CampiTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(CompetenciasTableSeeder::class);
        $this->call(ComportamientosTableSeeder::class);
        $this->call(CompetenciasComportamientosTableSeeder::class);
        $this->call(ProfesoresTableSeeder::class);
        $this->call(CRNsTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(CRNsAlumnosTableSeeder::class);
        $this->call(ActividadesTableSeeder::class);
        $this->call(RespuestasProfesoresTableSeeder::class);
        $this->call(RespuestasAlumnosTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(EquiposAlumnosTableSeeder::class);





        
    }
}
