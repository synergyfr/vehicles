<?php

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
        DB::table('users')->insert([
        	'name' => 'John Doe',
        	'email'   => 'john@doe.com',
        	'password' => bcrypt('test1234')
        ]);
    }
}
