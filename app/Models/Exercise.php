<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];
    
    public function days()
    {
        return $this->belongsToMany(Day::class, 'programs', 'exercise_id', 'day_id')
                    ->withPivot('reps');
    }

}
