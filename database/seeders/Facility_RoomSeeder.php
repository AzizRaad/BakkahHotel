<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Facility_RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facility_room')->insert([
            [
                'facility_id' => '1',
                'room_id' => '1'
            ],
            [
                'facility_id' => '1',
                'room_id' => '2'
            ],
            [
                'facility_id' => '1',
                'room_id' => '3'
            ],
            [
                'facility_id' => '2',
                'room_id' => '1'
            ],
            [
                'facility_id' => '2',
                'room_id' => '3'
            ],
            [
                'facility_id' => '3',
                'room_id' => '5'
            ],
            [
                'facility_id' => '1',
                'room_id' => '6'
            ],
            [
                'facility_id' => '1',
                'room_id' => '7'
            ],
            [
                'facility_id' => '4',
                'room_id' => '5'
            ],
            [
                'facility_id' => '2',
                'room_id' => '4'
            ],
            [
                'facility_id' => '3',
                'room_id' => '4'
            ],
            [
                'facility_id' => '2',
                'room_id' => '5'
            ],
            [
                'facility_id' => '4',
                'room_id' => '6'
            ],
            [
                'facility_id' => '4',
                'room_id' => '9'
            ],
            [
                'facility_id' => '3',
                'room_id' => '8'
            ],
            [
                'facility_id' => '4',
                'room_id' => '8'
            ],
            [
                'facility_id' => '1',
                'room_id' => '9'
            ],
        ]);
    }
}
