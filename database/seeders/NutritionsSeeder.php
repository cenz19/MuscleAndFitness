<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nutritions')->insert([
            [
                'name' => 'Grilled Chicken Breast',
                'calories' => 165,
                'fat' => 3.6,
                'protein' => 31,
                'carb' => 0,
                'image_url' => 'https://picsum.photos/300/300'
            ],
            [
                'name' => 'Beef Steak',
                'calories' => 271,
                'fat' => 19,
                'protein' => 25,
                'carb' => 0,
                'image_url' => 'https://picsum.photos/300/300'
            ],
            [
                'name' => 'Lamb Chop',
                'calories' => 282,
                'fat' => 22,
                'protein' => 25,
                'carb' => 0,
                'image_url' => 'https://picsum.photos/300/300'
            ],
            [
                'name' => 'Roasted Turkey',
                'calories' => 135,
                'fat' => 3.2,
                'protein' => 29,
                'carb' => 0,
                'image_url' => 'https://example.com/roasted-turkey.jpg'
            ],
            [
                'name' => 'Grilled Salmon',
                'calories' => 208,
                'fat' => 13,
                'protein' => 20,
                'carb' => 0,
                'image_url' => 'https://example.com/grilled-salmon.jpg'
            ]
        ]);
    }
}
