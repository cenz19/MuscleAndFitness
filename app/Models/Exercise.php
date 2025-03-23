<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'name',
        'description'
    ];

    function Programs(){
        return $this->belongsToMany(Program::class, 'program_exercise', 'exercise_id', 'program_id');
    }
}
