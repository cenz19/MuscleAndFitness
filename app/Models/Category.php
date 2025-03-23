<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program_id'];
    public $timestamps = false;


    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function categoryDetails()
    {
        return $this->hasMany(CategoryDetail::class, 'category_id','id');
    }
}
