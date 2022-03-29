<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(array(
            array(
            'name' => "Andhra Pradesh",
            'type'=> "State",
            ),
            array(
            'name' => "Arunachal Pradesh",
            'type'=> "State",
            ),
            array(
            'name' => "Assam",
            'type'=> "State",
            ),
            array(
            'name' => "Bihar",
            'type'=> "State",
            ),
            array(
            'name' => "Chhattisgarh",
            'type'=> "State",
            ),
            array(
            'name' => "Goa",
            'type'=> "State",
            ),
            array(
            'name' => "Gujrat",
            'type'=> "State",
            ),
            array(
            'name' => "Haryana",
            'type'=> "State",
            ),
            array(
            'name' => "Himachal Pradesh",
            'type'=> "State",
            ),
            array(
            'name' => "Jharkhand",
            'type'=> "State",
            ),
            array(
            'name' => "Karnataka",
            'type'=> "State",
            ),
            array(
            'name' => "Kerala",
            'type'=> "State",
            ),
            array(
            'name' => "Madhya Pradesh",
            'type'=> "State",
            ),
            array(
            'name' => "Maharashtra",
            'type'=> "State",
            ),
            array(
            'name' => "Manipur",
            'type'=> "State",
            ),
            array(
            'name' => "Meghalaya",
            'type'=> "State",
            ),
            array(
            'name' => "Mizoram",
            'type'=> "State",
            ),
            array(
            'name' => "Nagaland",
            'type'=> "State",
            ),
            array(
            'name' => "Odisha",
            'type'=> "State",
            ),
            array(
            'name' => "Punjab",
            'type'=> "State",
            ),
            array(
            'name' => "Rajasthan",
            'type'=> "State",
            ),
            array(
            'name' => "Sikkim",
            'type'=> "State",
            ),
            array(
            'name' => "Tamil Nadu",
            'type'=> "State",
            ),
            array(
            'name' => "Telangana",
            'type'=> "State",
            ),
            array(
            'name' => "Tripura",
            'type'=> "State",
            ),
            array(
            'name' => "Uttar Pradesh",
            'type'=> "State",
            ),
            array(
            'name' => "Uttarakhand",
            'type'=> "State",
            ),
            array(
            'name' => "West Bengal",
            'type'=> "State",
            ),
            array(
            'name' => "Andaman and Nicobar Islands",
            'type'=> "State",
            ),
            array(
            'name' => "Chandigarh",
            'type'=> "State",
            ),
            array(
            'name' => "Dadra and Nagar Haveli and Daman and Diu",
            'type'=> "State",
            ),
            array(
            'name' => "Delhi",
            'type'=> "State",
            ),
            array(
            'name' => "Jammu and Kashmir",
            'type'=> "State",
            ),
            array(
            'name' => "Ladakh",
            'type'=> "State",
            ),
            array(
            'name' => "Lakshadweep",
            'type'=> "State",
            ),
            array(
            'name' => "Puducherry",
            'type'=> "State",
            )
        ));
    }
}
