<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'benefit_id',
        'job_id'      
    ];


    
    protected $table = 'benefit_jobs';

    // Define the relationship with Benefit
    public function benefit()
    {
        return $this->belongsTo(Benefit::class, 'benefit_id');
    }

    // Define the relationship with Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
