<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'     
    ];

    
    protected $table = 'benefits';

    // Define the reverse relationship with BenefitJob
    public function benefitJobs()
    {
        return $this->hasMany(BenefitJob::class, 'benefit_id');
    }


}
