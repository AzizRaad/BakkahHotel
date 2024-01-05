<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1212'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //Supervisor
            [
                'name' => 'Supervisor',
                'email' => 'Supervisor@gmail.com',
                'password' => Hash::make('1212'),
                'role' => 'supervisor',
                'status' => 'active',
            ],

            //User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1212'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
