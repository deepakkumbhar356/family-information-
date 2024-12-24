<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'Maharashtra'],
            ['name' => 'AndhraPradesh'],
            ['name' => 'Gujrat'],
            ['name' => 'Goa'],
            ['name' => 'Madhyapradesh'],
            ['name' => 'Punjab'],
            ['name' => 'Rajasthan'],
            ['name' => 'Bihar'],
          
        ];

        DB::table('states')->insert($states);
    }
}
