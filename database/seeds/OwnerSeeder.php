<?php

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
        	'first_name'     => 'Henk',
        	'last_name'      => 'Rossouw',
        	'email'          => 'test@test.co.za',
        	'contact_number' => '084 123 1234',
        	'created_at'     => '2016-11-09 19:58:03',
        	'updated_at'     => '2016-11-09 19:58:05'
        ]);

         DB::table('owners')->insert([
        	'first_name'     => 'John',
        	'last_name'      => 'Doe',
        	'email'          => 'john@doe.co.za',
        	'contact_number' => '084 123 0000',
        	'created_at'     => '2016-11-12 13:01:38',
        	'updated_at'     => '2016-11-13 17:49:24'
        ]);
    }
}
