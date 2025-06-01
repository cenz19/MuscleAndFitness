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
            //1
            ['name' => "Day 1"],
            //2
            ['name' => "Day 2"],
            //3
            ['name' => "Day 3"],
            //4
            ['name' => "Day 4"],
            //5
            ['name' => "Day 5"],
            //6
            ['name' => "Day 6"],
            //7
            ['name' => "Day 7"]
            // //8
            // ['name' => "Day 2 (Lower Body - Quad Focus)"],
            // //9
            // ['name' => "Day 3 (Upper Body - Pull Focus)"],
            // //10
            // ['name' => "Day 4 (Lower Body - Hamstring & Core Focus)"],
            // //11
            // ['name' => "Day 1 (Chest & Triceps)"],
            // //12
            // ['name' => "Day 2 (Back & Biceps)"],
            // //13
            // ['name' => "Day 4 (Shoulders & Rear Delt)"],
            // //14
            // ['name' => "Day 5 (Arms & Core)"],
            // //15
            // ['name' => "Day 1 (Push - Chest, Shoulder, Triceps)"],
            // //16
            // ['name' => "Day 2 (Pull - Back, Biceps, Rear Delt)"],
            // //17
            // ['name' => "Day 1 (Chest Focus)"],
            // //18
            // ['name' => "Day 2 (Back Focus)"],
            // //19
            // ['name' => "Day 3 (Legs - Quad Focus)"],
            // //20
            // ['name' => "Day 4 (Shoulders & Traps)"],
            // //21
            // ['name' => "Day 5 (Arms - Biceps & Triceps)"],
            // //22
            // ['name' => "Day 6 (Legs - Hamstring & Glutes Focus)"],
            // //23
            // ['name' => "Day 7 (Core & Active Recovery)"],
            // //24
            // ['name' => "Day 4 (Push - Chest, Shoulder, Triceps)"],
            // //25
            // ['name' => "Day 5 (Pull - Back, Biceps, Rear Delt)"],
            // //26
            // ['name' => "Day 6 (Legs & Core)"],
        ]);
    }
}
