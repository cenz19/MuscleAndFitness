<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $table = 'days';

    protected $fillable = ['name'];
    public $timestamps = false;
    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'programs', 'day_id', 'exercise_id')
                    ->withPivot('reps');
    }

}
