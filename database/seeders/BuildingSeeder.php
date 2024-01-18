<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buildings')->insert([
            // Naseem Hotel
            ['name' => 'Naseem'],
            // Awali Hotel
            ['name' => 'Awali'],
            // Haram Hotel
            ['name' => 'Haram'],
        ]);
    }
}
