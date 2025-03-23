<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class, 'program_id', 'id');
    }

    public function exercises()
    {
        return $this->belongsToMany(
            Exercise::class,
            'program_exercise',
            'program_id',
            'exercise_id'
        )->withPivot('day_id', 'reps');
    }
}
