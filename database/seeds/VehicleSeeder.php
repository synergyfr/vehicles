<?php

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
        	'owners_id'         => '1',
        	'manufacturer'      => 'Volkswagen',
        	'type' 				=> 'Polo',
        	'year' 				=> '2014',
        	'colour' 			=> 'Blue',
        	'mileage_units'		=> 'm',
        	'mileage' 			=> '3000',
        	'date_registered'   => '1989-10-22',
        	'created_at'     	=> '2016-11-09 19:41:05',
        	'updated_at'     	=> '2016-11-09 19:41:07'
        ]);

        DB::table('vehicles')->insert([
        	'owners_id'         => '2',
        	'manufacturer'      => 'Audi',
        	'type' 				=> 'A5',
        	'year' 				=> '2016',
        	'colour' 			=> 'Metallic',
        	'mileage_units'		=> 'km',
        	'mileage' 			=> '5000',
        	'date_registered'   => '2016-10-24',
        	'created_at'     	=> '2016-11-09 19:41:30',
        	'updated_at'     	=> '2016-11-09 19:41:31'
        ]);
    }
}
