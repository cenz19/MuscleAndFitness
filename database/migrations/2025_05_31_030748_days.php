<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('days', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('durations');
    }
};


// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('program_exercise', function (Blueprint $table) {
//             $table->foreignId('program_id')->constrained('programs')->cascadeOnUpdate()->cascadeOnDelete();
//             $table->foreignId('exercise_id')->constrained('exercises')->cascadeOnUpdate()->cascadeOnDelete();
//             $table->foreignId('day_id')->constrained('days')->cascadeOnUpdate()->cascadeOnDelete();
//             $table->integer('reps');
//             $table->primary(['program_id', 'exercise_id', 'day_id']);
//         });    
//     }


//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('program_exercise');
//     }
// };
