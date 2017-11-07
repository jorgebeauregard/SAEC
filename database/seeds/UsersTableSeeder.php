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
        	'email' => 'A00399773@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01154613@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01172074@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01172831@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01173444@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01173766@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01272063@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01274509@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01322098@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01322755@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01323309@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01323311@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01323682@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01323884@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01326686@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01327298@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01327442@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01327852@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01328150@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01328159@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');


        $user = User::create([
        	'email' => 'A01328282@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329116@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329559@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329876@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329877@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329961@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01329982@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01363086@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01420953@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01421900@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01550759@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01730341@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01730538@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01731124@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'A01731255@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('student');

        $user = User::create([
        	'email' => 'gmc@itesm.mx',
        	'password' => bcrypt('secret'),
        ]);
        $user->assignRole('professor');
        
    }
}
