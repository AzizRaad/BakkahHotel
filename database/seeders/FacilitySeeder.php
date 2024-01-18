<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facilities')->insert([
            ['fac_name' => 'LCD TV'],
            ['fac_name' => 'WIFI'],
            ['fac_name' => 'RoomService'],
            ['fac_name' => 'Microwave'],
        ]);
    }
}
