<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'programs';
    protected $primaryKey = null;
    protected $fillable = ['day_id', 'exercise_id', 'category_id', 'reps'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
