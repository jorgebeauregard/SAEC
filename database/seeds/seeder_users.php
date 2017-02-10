<?php

use Illuminate\Database\Seeder;

class seeder_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'estudiante1',
        	'email' => 'e1@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
    }
}
