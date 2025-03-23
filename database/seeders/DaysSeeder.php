<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('days')->insert([
            ['name' => "Full Body"],
            ['name' => "Upper Body"],
            ['name' => "Lower Body & Core"],
            ['name' => "Push - Chest, Shoulder, Tricep"],
            ['name' => "Pull - Back, Bicep, Rear Delt"],
            ['name' => "Legs & Core"],
            ['name' => "Upper Body - Push Focus"],
            ['name' => "Lower Body - Quad Focus"],
            ['name' => "Upper Body - Pull Focus"],
            ['name' => "Lower Body - Hamstring & Core Focus"],
            ['name' => "Chest & Triceps"],
            ['name' => "Back & Biceps"],
            ['name' => "Shoulders & Rear Delt"],
            ['name' => "Arms & Core"],
            ['name' => "Push - Chest, Shoulder, Triceps"],
            ['name' => "Pull - Back, Biceps, Rear Delt"],
            ['name' => "Chest Focus"],
            ['name' => "Back Focus"],
            ['name' => "Legs - Quad Focus"],
            ['name' => "Shoulders & Traps"],
            ['name' => "Arms - Biceps & Triceps"],
            ['name' => "Legs - Hamstring & Glutes Focus"],
            ['name' => "Core & Active Recovery"],
        ]);
    }
}
