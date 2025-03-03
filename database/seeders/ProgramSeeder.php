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
        DB::table('programs')->insert([[
            'name'=>'Chest', 
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
                'created_at' => now(),
                'updated_at' => now(),
        ], 
        [
            'name' => "Shoulder", 
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => now(),
            'updated_at' => now(),
        ], 
        [
            'name' => "Back", 
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => now(),
            'updated_at' => now(),
            
        ], 
        [
            'name' => 'Abs', 
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => now(),
            'updated_at' => now(),
        ], 
        [
            'name' => "Legs", 
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => now(),
            'updated_at' => now(),
        ]  
        ]);
    }
}
