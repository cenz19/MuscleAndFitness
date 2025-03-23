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
                    'exercise_id' => 1,
                    'program_id' => 1,
                    'day_id' => 1,
                    'reps' => 2
                ], 
                [
                    'exercise_id' => 1,
                    'program_id' => 2,
                    'day_id' => 1,
                    'reps' => 2
                ], 
            ]
            );
    }
}
