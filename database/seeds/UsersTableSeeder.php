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
        	'email' => 'A01321230@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01321231@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01321232@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01321233@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01321234@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'L01230123@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('professor');
    }
}
