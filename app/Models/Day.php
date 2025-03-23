<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;


    public function programExercises()
    {
        return $this->hasMany(ProgramExercise::class, 'day_id', 'id');
    }
}
