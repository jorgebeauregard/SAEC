<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'description' => 'manage administration privileges',
        ]);
        DB::table('roles')->insert([
            'name' => 'Professor',
            'slug' => 'professor',
            'description' => 'manage students',
        ]);
        DB::table('roles')->insert([
            'name' => 'Student',
            'slug' => 'student',
            'description' => 'student user capabilities',
        ]);
    }
}
