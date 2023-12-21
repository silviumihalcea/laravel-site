<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
            // Inserting 10 employer users with logos
            for ($i = 1; $i <= 5; $i++) {
                \DB::table('users')->insert([
                    'name' => 'Employer' . $i,
                    'email' => 'employer' . $i . '@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'employer',
                    'employer_logo' => 'images/img' . $i . '.png'
                ]);
            }


            // Inserting 10 employee users
            for ($i = 1; $i <= 10; $i++) {
                \DB::table('users')->insert([
                    'name' => 'Employee' . $i,
                    'email' => 'employee' . $i . '@gmail.com',
                    'password' => bcrypt('123456'),
                    'type' => 'employee'
                ]);
            }
            
}

    }



