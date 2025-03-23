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
                [
                    'exercise_id' => 1,
                    'program_id' => 5,
                    'day_id' => 1,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 1,
                    'program_id' => 4,
                    'day_id' => 1,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 1,
                    'program_id' => 3,
                    'day_id' => 1,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 1,
                    'program_id' => 6,
                    'day_id' => 1,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 1,
                    'program_id' => 8,
                    'day_id' => 1,
                    'reps' => 1
                ], 
                ### **2x Seminggu (Upper - Lower)**
                // **Day 1 (Upper Body)** (id: 2)
                [
                    'exercise_id' => 2,
                    'program_id' => 1,
                    'day_id' => 2,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 2,
                    'day_id' => 2,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 5,
                    'day_id' => 2,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 4,
                    'day_id' => 2,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 3,
                    'day_id' => 2,
                    'reps' => 1
                ],
                // **Day 2 (Lower Body & Core)** (id: 3)
                [
                    'exercise_id' => 2,
                    'program_id' => 9,
                    'day_id' => 3,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 10,
                    'day_id' => 3,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 11,
                    'day_id' => 3,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 12,
                    'day_id' => 3,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 2,
                    'program_id' => 8,
                    'day_id' => 3,
                    'reps' => 1
                ],
                ### **3x Seminggu (Push - Pull - Legs)**
                // **Day 1 (Push - Chest, Shoulder, Tricep)**
                [
                    'exercise_id' => 3,
                    'program_id' => 1,
                    'day_id' => 4,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 3,
                    'day_id' => 4,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 5,
                    'day_id' => 4,
                    'reps' => 1
                ],
                // **Day 2 (Pull - Back, Bicep, Rear Delt)**
                [
                    'exercise_id' => 3,
                    'program_id' => 2,
                    'day_id' => 5,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 4,
                    'day_id' => 5,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 13,
                    'day_id' => 5,
                    'reps' => 1
                ],
                // **Day 3 (Legs & Core)**
                [
                    'exercise_id' => 3,
                    'program_id' => 9,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 10,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 11,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 12,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 3,
                    'program_id' => 8,
                    'day_id' => 6,
                    'reps' => 1
                ],
                ### **4x Seminggu (Upper - Lower Split)**
                //**Day 1 (Upper Body - Push Focus)**
                [
                    'exercise_id' => 4,
                    'program_id' => 1,
                    'day_id' => 7,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 3,
                    'day_id' => 7,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 5,
                    'day_id' => 7,
                    'reps' => 1
                ],
                // **Day 2 (Lower Body - Quad Focus)**
                [
                    'exercise_id' => 4,
                    'program_id' => 9,
                    'day_id' => 8,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 10,
                    'day_id' => 8,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 11,
                    'day_id' => 8,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 12,
                    'day_id' => 8,
                    'reps' => 2
                ],
                // **Day 3 (Upper Body - Pull Focus)**
                [
                    'exercise_id' => 4,
                    'program_id' => 2,
                    'day_id' => 9,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 4,
                    'day_id' => 9,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 13,
                    'day_id' => 9,
                    'reps' => 1
                ],
                // **Day 4 (Lower Body - Hamstring & Core Focus)**
                [
                    'exercise_id' => 4,
                    'program_id' => 10,
                    'day_id' => 10,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 11,
                    'day_id' => 10,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 12,
                    'day_id' => 10,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 4,
                    'program_id' => 8,
                    'day_id' => 10,
                    'reps' => 1
                ],
                ### **5x Seminggu (Body Part Split)**
                // **Day 1 (Chest & Triceps)**
                [
                    'exercise_id' => 5,
                    'program_id' => 1,
                    'day_id' => 11,
                    'reps' => 3
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 5,
                    'day_id' => 11,
                    'reps' => 2
                ],
                // **Day 2 (Back & Biceps)**
                [
                    'exercise_id' => 5,
                    'program_id' => 2,
                    'day_id' => 12,
                    'reps' => 3
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 4,
                    'day_id' => 12,
                    'reps' => 2
                ],
                // **Day 3 (Legs & Core)**
                [
                    'exercise_id' => 5,
                    'program_id' => 9,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 10,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 11,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 12,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 8,
                    'day_id' => 6,
                    'reps' => 1
                ],
                // **Day 4 (Shoulders & Rear Delt)**
                [
                    'exercise_id' => 5,
                    'program_id' => 3,
                    'day_id' => 13,
                    'reps' => 3
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 13,
                    'day_id' => 13,
                    'reps' => 2
                ],
                //**Day 5 (Arms & Core)**
                [
                    'exercise_id' => 5,
                    'program_id' => 4,
                    'day_id' => 14,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 5,
                    'day_id' => 14,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 5,
                    'program_id' => 8,
                    'day_id' => 14,
                    'reps' => 1
                ],
                ### **6x Seminggu (Modified Push-Pull-Legs)**
                // **Day 1 (Push - Chest, Shoulder, Triceps)**
                [
                    'exercise_id' => 6,
                    'program_id' => 1,
                    'day_id' => 15,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 3,
                    'day_id' => 15,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 5,
                    'day_id' => 15,
                    'reps' => 1
                ],
                //**Day 2 (Pull - Back, Biceps, Rear Delt)**
                [
                    'exercise_id' => 6,
                    'program_id' => 2,
                    'day_id' => 16,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 4,
                    'day_id' => 16,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 13,
                    'day_id' => 16,
                    'reps' => 2
                ],
                //**Day 3 (Legs & Core)**
                [
                    'exercise_id' => 6,
                    'program_id' => 9,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 10,
                    'day_id' => 6,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 11,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 12,
                    'day_id' => 6,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 8,
                    'day_id' => 6,
                    'reps' => 1
                ],
                //**Day 4 (Push - Chest, Shoulder, Triceps)**
                [
                    'exercise_id' => 6,
                    'program_id' => 1,
                    'day_id' => 24,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 3,
                    'day_id' => 24,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 5,
                    'day_id' => 24,
                    'reps' => 1
                ],
                // **Day 5 (Pull - Back, Biceps, Rear Delt)**
                [
                    'exercise_id' => 6,
                    'program_id' => 2,
                    'day_id' => 25,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 4,
                    'day_id' => 25,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 13,
                    'day_id' => 25,
                    'reps' => 1
                ],
                // **Day 6 (Legs & Core)**
                [
                    'exercise_id' => 6,
                    'program_id' => 9,
                    'day_id' => 26,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 10,
                    'day_id' => 26,
                    'reps' => 2
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 11,
                    'day_id' => 26,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 12,
                    'day_id' => 26,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 6,
                    'program_id' => 8,
                    'day_id' => 26,
                    'reps' => 1
                ],
                ### **7x Seminggu (Advanced Bro Split)**
                // **Day 1 (Chest Focus)**
                [
                    'exercise_id' => 7,
                    'program_id' => 1,
                    'day_id' => 17,
                    'reps' => 4
                ],
                [
                    'exercise_id' => 7,
                    'program_id' => 5,
                    'day_id' => 17,
                    'reps' => 1
                ],
                // **Day 2 (Back Focus)**
                [
                    'exercise_id' => 7,
                    'program_id' => 2,
                    'day_id' => 18,
                    'reps' => 4
                ],
                [
                    'exercise_id' => 7,
                    'program_id' => 4,
                    'day_id' => 18,
                    'reps' => 1
                ],
                // **Day 3 (Legs - Quad Focus)**
                [
                    'exercise_id' => 7,
                    'program_id' => 9,
                    'day_id' => 19,
                    'reps' => 3
                ],
                [
                    'exercise_id' => 7,
                    'program_id' => 12,
                    'day_id' => 19,
                    'reps' => 2
                ],
                //**Day 4 (Shoulders & Traps)**
                [
                    'exercise_id' => 7,
                    'program_id' => 3,
                    'day_id' => 20,
                    'reps' => 3
                ],
                [
                    'exercise_id' => 7,
                    'program_id' => 13,
                    'day_id' => 20,
                    'reps' => 1
                ],
                [
                    'exercise_id' => 7,
                    'program_id' => 14,
                    'day_id' => 20,
                    'reps' => 1
                ],
                // **Day 5 (Arms - Biceps & Triceps)**
                [
                    'exercise_id' => 7,
                    'program_id' => 4,
                    'day_id' => 21,
                    'reps' => 3
                ],      
                [
                    'exercise_id' => 7,
                    'program_id' => 5,
                    'day_id' => 21,
                    'reps' => 3
                ],    
                //**Day 6 (Legs - Hamstring & Glutes Focus)**                                                                           
                [
                    'exercise_id' => 7,
                    'program_id' => 10,
                    'day_id' => 22,
                    'reps' => 3
                ],  
                [
                    'exercise_id' => 7,
                    'program_id' => 11,
                    'day_id' => 22,
                    'reps' => 2
                ],  
                [
                    'exercise_id' => 7,
                    'program_id' => 12,
                    'day_id' => 22,
                    'reps' => 1
                ],  
                // **Day 7 (Core & Active Recovery)**
                [
                    'exercise_id' => 7,
                    'program_id' => 8,
                    'day_id' => 23,
                    'reps' => 3
                ], 
                [
                    'exercise_id' => 7,
                    'program_id' => 15,
                    'day_id' => 23,
                    'reps' => 1
                ], 
                [
                    'exercise_id' => 7,
                    'program_id' => 16,
                    'day_id' => 23,
                    'reps' => 1
                ], 
            ]
            );
    }
}
