<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('programs')->insert([
            [
                'category_id' => 1,
                'day_id' => 1,
                'exercise_id' => 1,
                'reps' => 10,
            ],
            [
                'category_id' => 1,
                'day_id' => 1,
                'exercise_id' => 2,
                'reps' => 20,
            ],
            [
                'category_id' => 1,
                'day_id' => 1,
                'exercise_id' => 3,
                'reps' => 30,
            ],
            [
                'category_id' => 2,
                'day_id' => 1,
                'exercise_id' => 2,
                'reps' => 10,
            ],
            [
                'category_id' => 2,
                'day_id' => 2,
                'exercise_id' => 1,
                'reps' => 15,
            ],
            [
                'category_id' => 3,
                'day_id' => 1,
                'exercise_id' => 3,
                'reps' => 8,
            ],
            [
                'category_id' => 3,
                'day_id' => 2,
                'exercise_id' => 4,
                'reps' => 8,
            ],
            [
                'category_id' => 3,
                'day_id' => 3,
                'exercise_id' => 5,
                'reps' => 8,
            ]
        ]);
    }
}
