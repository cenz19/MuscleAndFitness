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
                'day_id' => 1,
                'exercise_id' => 1,
                'reps' => 12,
            ],
            [
                'day_id' => 1,
                'exercise_id' => 2,
                'reps' => 10,
            ],
            [
                'day_id' => 2,
                'exercise_id' => 1,
                'reps' => 15,
            ],
            [
                'day_id' => 2,
                'exercise_id' => 3,
                'reps' => 8,
            ],
        ]);
    }
}
