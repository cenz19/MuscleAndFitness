<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ExerciseSeeder::class, 
            ProgramSeeder::class,
            DaysSeeder::class,
            ProgramExerciseSeeder::class, 
            CategoriesSeeder::class,
            CategoryDetailSeeder::class,
            UserSeeder::class
        ]);
    }
}
