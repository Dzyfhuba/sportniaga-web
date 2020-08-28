<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'uba21id@gmail.com',
        	'password' => bcrypt('plmoknijb'),
        ]);

        $admin->assignRole('admin');

		$user = User::create([
        	'name' => 'User',
        	'email' => '01lululili01@gmail.com',
        	'password' => bcrypt('plmoknijb'),
        ]);

        $user->assignRole('user');        
    }
}
