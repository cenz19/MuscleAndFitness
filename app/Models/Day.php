<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Day extends Model
{
    use HasFactory;
    protected $table = 'days';

    protected $fillable = ['name'];
    public $timestamps = false;
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

}
