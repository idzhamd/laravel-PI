<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'email'	=> 'root@gmail.com',
        	'name'	=> 'root',
        	'password'	=> bcrypt('rootroot')
        	]);
    }
}
