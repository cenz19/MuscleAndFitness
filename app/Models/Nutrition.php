<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory;
    protected $table = 'nutritions';

    protected $fillable = [
        'name',
        'calories',
        'fat',
        'protein',
        'carbs',
        'image',
    ];
    public $timestamps = false;

}
