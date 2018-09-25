<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
        	'name'		=> 'admin',
        	'email'		=> 'admin@admin.com',
        	'password'	=> bcrypt('admin')
        ];

        if(\App\User::count() == 0){
        	\App\User::create($admin);
        }
    }
}
