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
            'name' => "Dada (Chest)", 
        ], 
        [
            'name' => "Punggung (Back)", 
        ], 
        [
            'name' => "Bahu (Shoulders)", 
        ], 
        [
            'name' => 'Biceps', 
        ],
        [
            'name' => 'Triceps', 
        ], 
        [
            'name' => "Kaki (Legs)", 
        ],
        [
            'name' => 'Perut (Abs)', 
        ],
        [
            'name' => 'core'
        ]
        ]);
    }
}
