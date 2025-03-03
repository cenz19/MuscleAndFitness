<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];

    function Exercises(){
        return $this->belongsToMany(Exercise::class, 'program_exercise', 'program_id', 'exercise_id')->withTimestamps();
    }
}
