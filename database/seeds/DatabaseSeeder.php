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
    	$this->call(seeder_users::class);
        $this->call(seeder_plan::class);
        $this->call(seeder_periodo::class);
        $this->call(seeder_comportamiento::class);
    }
}
