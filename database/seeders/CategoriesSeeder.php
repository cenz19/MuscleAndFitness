<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            // Chest categories
            ['name' => 'INCLINE', 'program_id' => 1],
            ['name' => 'FLAT', 'program_id' => 1],
            ['name' => 'DECLINE', 'program_id' => 1],
            ['name' => 'Chest Machine', 'program_id' => 1],

            // Back categories
            ['name' => 'LAT PULLING', 'program_id' => 2],
            ['name' => 'ROWING', 'program_id' => 2],
            ['name' => 'LOWER BACK', 'program_id' => 2],
            ['name' => 'UPPER BACK', 'program_id' => 2],

            // Shoulders categories
            ['name' => 'OVERHEAD PRESSING', 'program_id' => 3],
            ['name' => 'LATERAL RAISES', 'program_id' => 3],
            ['name' => 'FRONT RAISES', 'program_id' => 3],
            ['name' => 'REAR DELT', 'program_id' => 3],

            // Biceps categories
            ['name' => 'CURLS', 'program_id' => 4],
            ['name' => 'Biceps Machine', 'program_id' => 4],

            // Triceps categories
            ['name' => 'EXTENSIONS', 'program_id' => 5],
            ['name' => 'PUSH-DOWNS', 'program_id' => 5],
            ['name' => 'KICKBACKS', 'program_id' => 5],

            // Legs categories
            ['name' => 'QUADRICEPS', 'program_id' => 5],
            ['name' => 'HAMSTRINGS', 'program_id' => 5],
            ['name' => 'GLUTES', 'program_id' => 5],
            ['name' => 'CALVES', 'program_id' => 5],

            // Abs categories
            ['name' => 'UPPER ABS', 'program_id' => 5],
            ['name' => 'LOWER ABS', 'program_id' => 5],
            ['name' => 'OBLIQUES', 'program_id' => 5],
            ['name' => 'CORE', 'program_id' => 5],
        ]);
    }
}
