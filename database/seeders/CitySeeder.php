<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities =[
            ['name'=>'Nagpur','state_id' => 1],
            ['name'=>'Pune', 'state_id' => 2],
            ['name'=>'Mumbai', 'state_id' => 3],
            ['name'=>'Chennai', 'state_id' => 4],
            ['name'=>'Delhi', 'state_id' => 5],
            ['name'=>'Aurangabad', 'state_id' => 6],
        ];

        //   foreach ($cities as $city) {
        //     City::create($city);
        DB::table('cities')->insert($cities);
        

    }
        }  
// }
