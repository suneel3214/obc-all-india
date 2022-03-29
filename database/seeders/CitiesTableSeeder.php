<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array(
            array(
                'name' => "Bhopal",
                'type' => 'City',
                'state_id' => "13",
    
                ),
                array(
                    'name' => "Indore",
                    'type' => 'City',
                    'state_id' => "13",
                ),
                array(
                    'name' => "Guna",
                    'type' => 'City',
                    'state_id' => "13",
                ),
                array(
                'name' => "Gwalior",
                'type' => 'City',
                'state_id' => "13",
    
                ),
                array(
                    'name' => "Ashok Nagar",
                    'type' => 'City',
                    'state_id' => "13",
                ),
                array(
                    'name' => "Ujjain",
                    'type' => 'City',
                    'state_id' => "13",
                )
        ));

    }
}
