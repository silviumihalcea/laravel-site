<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // No experiences
       \DB::table('experiences')->insert([
        'name' => "No experiences",
        'min_experience_interval' => 0,
        'max_experience_interval' => null
       ]);

       // Entry
       \DB::table('experiences')->insert([
        'name' => "Entry",
        'min_experience_interval' => 1,
        'max_experience_interval' => 2
        ]);

        // Middle
        \DB::table('experiences')->insert([
        'name' => "Middle",
        'min_experience_interval' => 2,
        'max_experience_interval' => 5
        ]);

        // Senior
        \DB::table('experiences')->insert([
        'name' => "Senior",
        'min_experience_interval' => 5,
        'max_experience_interval' => null
        ]);

        // Management / Executive
        \DB::table('experiences')->insert([
        'name' => "Management / Executive",
        'min_experience_interval' => 10,
        'max_experience_interval' => null
        ]);
    }
}


