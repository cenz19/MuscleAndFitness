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
            ['name' => 'Chest',    'description' => 'Pectoral muscles used in pushing movements.'],
            ['name' => 'Back',     'description' => 'Latissimus dorsi and other muscles used in pulling movements.'],
            ['name' => 'Shoulders','description' => 'Deltoid muscles supporting arm movement.'],
            ['name' => 'Biceps',   'description' => 'Front arm muscles responsible for elbow flexion.'],
            ['name' => 'Triceps',  'description' => 'Back arm muscles responsible for elbow extension.'],
            ['name' => 'Core',     'description' => 'Abdominals and obliques stabilizing the torso.'],
            ['name' => 'Quadriceps','description' => 'Front thigh muscles used in leg extension.'],
            ['name' => 'Hamstrings','description' => 'Back thigh muscles used in leg flexion.'],
            ['name' => 'Glutes',   'description' => 'Muscles of the buttocks for hip extension.'],
            ['name' => 'Calves',   'description' => 'Lower leg muscles used in ankle flexion.']
        ]);
    }
}
