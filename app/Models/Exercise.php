<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];
    
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

}
