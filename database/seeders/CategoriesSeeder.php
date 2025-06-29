<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            //1
            ['name' => "One Day"],
            //2
            ['name' => "Two Day"],
            //3
            ['name' => "Three Day"],
            //4
            ['name' => "Four Day"],
            //5
            ['name' => "Five Day"],
            //6
            ['name' => "Six Day"],
            //7
            ['name' => "Seven Day"]
            ]
        );
    }
}
