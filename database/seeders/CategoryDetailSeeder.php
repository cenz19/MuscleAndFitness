<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('category_details')->insert([
            // Chest
            ['name' => 'Incline Barbell Bench Press', 'category_id' => 1],
            ['name' => 'Incline Dumbbell Bench Press', 'category_id' => 1],
            ['name' => 'Incline Dumbbell Flyes', 'category_id' => 1],
            ['name' => 'Incline Push-Up', 'category_id' => 1],
            ['name' => 'Barbell Bench Press', 'category_id' => 2],
            ['name' => 'Dumbbell Bench Press', 'category_id' => 2],
            ['name' => 'Dumbbell Flyes', 'category_id' => 2],
            ['name' => 'Push-Up', 'category_id' => 2],
            ['name' => 'Decline Barbell Bench Press', 'category_id' => 3],
            ['name' => 'Decline Dumbbell Bench Press', 'category_id' => 3],
            ['name' => 'Decline Dumbbell Flyes', 'category_id' => 3],
            ['name' => 'Decline Push-Up', 'category_id' => 3],
            ['name' => 'Chest Press Machine', 'category_id' => 4],
            ['name' => 'Pec Deck Machine', 'category_id' => 4],
            ['name' => 'Cable Crossover', 'category_id' => 4],

            // Back
            ['name' => 'Lat Pulldown', 'category_id' => 5],
            ['name' => 'Pull-Up', 'category_id' => 5],
            ['name' => 'Chin-Up', 'category_id' => 5],
            ['name' => 'Barbell Bent-Over Row', 'category_id' => 6],
            ['name' => 'Dumbbell One-Arm Row', 'category_id' => 6],
            ['name' => 'Seated Cable Row', 'category_id' => 6],
            ['name' => 'T-Bar Row', 'category_id' => 6],
            ['name' => 'Deadlift', 'category_id' => 7],
            ['name' => 'Hyperextension', 'category_id' => 7],
            ['name' => 'Good Mornings', 'category_id' => 7],
            ['name' => 'Face Pulls', 'category_id' => 8],
            ['name' => 'Shrugs', 'category_id' => 8],
            ['name' => 'Reverse Flyes', 'category_id' => 8],

            // Shoulders
            ['name' => 'Barbell Overhead Press', 'category_id' => 9],
            ['name' => 'Dumbbell Shoulder Press', 'category_id' => 9],
            ['name' => 'Arnold Press', 'category_id' => 9],
            ['name' => 'Dumbbell Lateral Raise', 'category_id' => 10],
            ['name' => 'Cable Lateral Raise', 'category_id' => 10],
            ['name' => 'Dumbbell Front Raise', 'category_id' => 11],
            ['name' => 'Cable Front Raise', 'category_id' => 11],
            ['name' => 'Reverse Pec Deck Fly', 'category_id' => 12],
            ['name' => 'Bent-Over Dumbbell Reverse Fly', 'category_id' => 12],

            // Biceps
            ['name' => 'Barbell Curl', 'category_id' => 13],
            ['name' => 'Dumbbell Curl', 'category_id' => 13],
            ['name' => 'Hammer Curl', 'category_id' => 13],
            ['name' => 'Preacher Curl', 'category_id' => 13],
            ['name' => 'Concentration Curl', 'category_id' => 13],
            ['name' => 'Cable Curl', 'category_id' => 14],
            ['name' => 'Machine Bicep Curl', 'category_id' => 14],

            // Triceps
            ['name' => 'Tricep Dips', 'category_id' => 15],
            ['name' => 'Overhead Tricep Extension', 'category_id' => 15],
            ['name' => 'Skull Crushers', 'category_id' => 15],
            ['name' => 'Cable Tricep Pushdown', 'category_id' => 16],
            ['name' => 'Reverse Grip Tricep Pushdown', 'category_id' => 16],
            ['name' => 'Dumbbell Tricep Kickback', 'category_id' => 17],

            // Legs
            ['name' => 'Squat', 'category_id' => 18],
            ['name' => 'Leg Press', 'category_id' => 18],
            ['name' => 'Lunges', 'category_id' => 18],
            ['name' => 'Leg Extension', 'category_id' => 18],
            ['name' => 'Romanian Deadlift', 'category_id' => 19],
            ['name' => 'Leg Curl', 'category_id' => 19],
            ['name' => 'Good Mornings', 'category_id' => 19],
            ['name' => 'Hip Thrust', 'category_id' => 20],
            ['name' => 'Glute Bridge', 'category_id' => 20],
            ['name' => 'Cable Kickback', 'category_id' => 20],
            ['name' => 'Standing Calf Raise', 'category_id' => 21],
            ['name' => 'Seated Calf Raise', 'category_id' => 21],
            ['name' => 'Donkey Calf Raise', 'category_id' => 21],

            // Abs
            ['name' => 'Crunches', 'category_id' => 22],
            ['name' => 'Sit-Up', 'category_id' => 22],
            ['name' => 'Cable Crunch', 'category_id' => 22],
            ['name' => 'Leg Raise', 'category_id' => 23],
            ['name' => 'Reverse Crunch', 'category_id' => 23],
            ['name' => 'Hanging Leg Raise', 'category_id' => 23],
            ['name' => 'Russian Twist', 'category_id' => 24],
            ['name' => 'Side Plank', 'category_id' => 24],
            ['name' => 'Bicycle Crunch', 'category_id' => 24],
            ['name' => 'Plank', 'category_id' => 25],
            ['name' => 'Mountain Climbers', 'category_id' => 25],
            ['name' => 'Ab Wheel Rollout', 'category_id' => 25],
        ]);
    }
}
