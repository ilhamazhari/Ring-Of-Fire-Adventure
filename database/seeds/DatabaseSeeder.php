<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'fullname' => 'RoFA Admin',
        	'username' => 'rofa_admin2019',
        	'email' => 'azhariilham@gmail.com',
        	'password' => bcrypt('adVenturestartedin2019'),
        	'credentials' => 'superadmin',
        ]);
    }
}
