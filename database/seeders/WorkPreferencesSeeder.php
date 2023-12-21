<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkPreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Full-time
       \DB::table('work_preferences')->insert([
        'name' => "Full-time"
       ]);

       // Part-time
       \DB::table('work_preferences')->insert([
        'name' => "Part-time"
       ]);

       // Internship
       \DB::table('work_preferences')->insert([
        'name' => "Internship"
       ]);

       // Project-based
       \DB::table('work_preferences')->insert([
        'name' => "Project-based"
       ]);
    }
}
