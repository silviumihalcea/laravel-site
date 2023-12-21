<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            JobsSeeder::class,
            DomainsSeeder::class,
            ExperienceSeeder::class,
            WorkPreferencesSeeder::class,
            LanguagesSeeder::class,
            BenefitsSeeder::class,
            BenefitJobSeeder::class
        ]);
    }
}
