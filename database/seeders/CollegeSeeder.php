<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('colleges')->insert([
            ['college_name' => 'ABC Engineering College'],
            ['college_name' => 'XYZ Science College'],
            ['college_name' => 'LMN Arts College'],
        ]);
    }
}
