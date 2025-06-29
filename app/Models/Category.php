<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';


    protected $fillable = [
        'name'
    ];
    public $timestamps = false;

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
