<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'domain_id',
        'employer_id',
        'experience_id',
        'work_preferences_id',
        'language_id',
        'expired_at',
    ];

    protected $table = 'jobs';

    public function benefitJobs()
    {
        return $this->hasMany(BenefitJob::class, 'job_id');
    }

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function workPreference()
    {
        return $this->belongsTo(WorkPreference::class, 'work_preferences_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}