<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id'

    ];

    protected $table = 'carts';

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
