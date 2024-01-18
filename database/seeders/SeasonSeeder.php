<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seasons')->insert([
            [
                'start' => '2024-01-01',
                'end' => '2024-02-01',
                'increasement' => '50',
            ],
            [
                'start' => '2024-12-01',
                'end' => '2024-12-31',
                'increasement' => '100',
            ],
            [
                'start' => '2024-07-01',
                'end' => '2024-09-01',
                'increasement' => '75',
            ],
        ]);
    }
}
