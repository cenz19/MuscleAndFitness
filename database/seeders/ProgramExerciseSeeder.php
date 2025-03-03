<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_exercise')->insert(
            [
                [
                    'program_id' => 1,
                    'exercise_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ], 
                [
                    'program_id' => 5,
                    'exercise_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ], 
                
            ]
            );
    }
}
