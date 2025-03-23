<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exercises')->insert([
            [
                'name' => '1x Seminggu (Full Body)',
            ],
            [
                'name'=> '2x Seminggu (Upper - Lower)',
            ],
            [
                'name' => '3x Seminggu (Push - Pull - Legs)',
            ], 
            [   
                'name' => '4x Seminggu (Upper - Lower Split)', 
            ], 
            [
                "name" => "5x Seminggu (Body Part Split)", 
            ],
            [   
                'name' => '6x Seminggu (Modified Push-Pull-Legs)', 
            ],
            [   
                'name' => '7x Seminggu (Advanced Bro Split)', 
            ],
        ]);
    }
}
