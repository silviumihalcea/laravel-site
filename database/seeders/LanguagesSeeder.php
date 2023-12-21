<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Romanian
       \DB::table('languages')->insert([
        'name' => "Romanian"
       ]);

       // English
       \DB::table('languages')->insert([
        'name' => "English"
       ]);

       // Spanish
       \DB::table('languages')->insert([
        'name' => "Spanish"
       ]);

       // Italian
       \DB::table('languages')->insert([
        'name' => "Italian"
       ]);
    }
}
