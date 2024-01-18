<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            // first building
            // first room
            [
                'room_no'=>'101',
                'room_type_id'=>'1',
                'building_id'=>'1',
                'room_capacity'=>'4',
                'price'=>'310',
                'size'=>'24',
                'view'=>'Balcony',
                'bed_style'=>'King',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //second room
            [
                'room_no'=>'102',
                'room_type_id'=>'2',
                'building_id'=>'1',
                'room_capacity'=>'5',
                'price'=>'170',
                'size'=>'30',
                'view'=>'Garden',
                'bed_style'=>'queen',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //Third Room
            [
                'room_no'=>'103',
                'room_type_id'=>'3',
                'building_id'=>'1',
                'room_capacity'=>'3',
                'price'=>'120',
                'size'=>'20',
                'view'=>'market',
                'bed_style'=>'single',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],

            //Second Building
            //first room
            [
                'room_no'=>'201',
                'room_type_id'=>'1',
                'building_id'=>'2',
                'room_capacity'=>'4',
                'price'=>'150',
                'size'=>'24',
                'view'=>'Balcony',
                'bed_style'=>'King',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //second room
            [
                'room_no'=>'202',
                'room_type_id'=>'3',
                'building_id'=>'2',
                'room_capacity'=>'3',
                'price'=>'120',
                'size'=>'20',
                'view'=>'Sea',
                'bed_style'=>'single',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //Third room
            [
                'room_no'=>'203',
                'room_type_id'=>'4',
                'building_id'=>'2',
                'room_capacity'=>'5',
                'price'=>'300',
                'size'=>'40',
                'view'=>'Beach',
                'bed_style'=>'King & queen',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],

            //third building
            //first room
            [
                'room_no'=>'301',
                'room_type_id'=>'1',
                'building_id'=>'3',
                'room_capacity'=>'4',
                'price'=>'650',
                'size'=>'24',
                'view'=>'Balcony',
                'bed_style'=>'King',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //Second room
            [
                'room_no'=>'302',
                'room_type_id'=>'2',
                'building_id'=>'3',
                'room_capacity'=>'4',
                'price'=>'1500',
                'size'=>'24',
                'view'=>'Balcony',
                'bed_style'=>'King',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
            //Third room
            [
                'room_no'=>'303',
                'room_type_id'=>'1',
                'building_id'=>'3',
                'room_capacity'=>'4',
                'price'=>'990',
                'size'=>'24',
                'view'=>'Balcony',
                'bed_style'=>'King',
                'description'=>'One of our very delecate rooms with high end facilities and services brovided for your comfort and enjoyment along with your stay in our fine building',
                'status'=>'available',
            ],
        ]);
    }
}
