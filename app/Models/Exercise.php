<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function programs()
{
    return $this->belongsToMany(
        Program::class, 
        'program_exercise', 
        'exercise_id', 
        'program_id'
    )->withPivot('day_id', 'reps');
}

}
