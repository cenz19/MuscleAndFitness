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
        DB::table('programs')->insert([
        [
            //1
            'name' => "Dada (Chest)", 
        ], 
        [
            //2
            'name' => "Punggung (Back)", 
        ], 
        [
            //3
            'name' => "Bahu (Shoulders)", 
        ], 
        [
            //4
            'name' => 'Biceps', 
        ],
        [
            //5
            'name' => 'Triceps', 
        ], 
        [
            //6
            'name' => "Kaki (Legs)", 
        ],
        [
            //7
            'name' => 'Perut (Abs)', 
        ],
        [
            //8
            'name' => 'Core'
        ],
        [
            //9
            'name' => 'Quads'
        ], 
        [
            //10
            'name' => 'Hamstring'
        ], 
        [
            //11
            'name' => 'Glutes'
        ],
        [
            //12
            'name' => 'Calves'
        ], 
        [
            //13
            'name' => "Rear Delt"
        ],
        [
            //14
            'name' => "Traps"
        ],
        [
            //15
            'name' => "Mobility"
        ],
        [
            //16
            'name' => "Light Cardio"
        ]                                   
        ]);
    }
}
