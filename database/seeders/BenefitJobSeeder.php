<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Generate random benefit associations for each job
        for ($jobId = 1; $jobId <= 40; $jobId++) {
            // Get a random subset of benefit IDs (maximum 24)
            $randomBenefitIds = array_rand(range(1, 24), rand(1, 24));
        
            // If only one benefit is chosen, convert it to an array for consistency
            $benefitIds = is_array($randomBenefitIds) ? $randomBenefitIds : [$randomBenefitIds];

            // Remove 0 from benefit IDs if present
            $benefitIds = array_filter($benefitIds, function ($id) {
            return $id !== 0;
            });
        
            // Insert Benefit-Job associations
            foreach ($benefitIds as $benefitId) {
                \DB::table('benefit_jobs')->insert([
                    'benefit_id' => $benefitId,
                    'job_id' => $jobId
                ]);
            }
        }
        
    }
}



