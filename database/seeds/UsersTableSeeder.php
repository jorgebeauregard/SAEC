<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id' => 1,
        	'email' => 'A01230123@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
            'id' => 2,
        	'email' => 'L01230123@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('professor');
    }
}
