<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_experience_interval',
        'max_experience_interval'     
    ];

    
    public function job()
    {
        return $this->hasMany(Job::class);
    }
}