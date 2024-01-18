<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_types')->insert([
            //Luxury
            ['name' => 'Luxury'],
            //VIP
            ['name' => 'VIP'],
            //Single
            ['name' => 'Single'],
            //Suite
            ['name' => 'Suite'],
        ]);
    }
}
