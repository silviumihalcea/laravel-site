<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Benefit 1
        \DB::table('benefits')->insert([
            'name' => 'Health Insurance'
        ]);

        // Benefit 2
        \DB::table('benefits')->insert([
            'name' => 'Flexible Work Hours'
        ]);

        // Benefit 3
        \DB::table('benefits')->insert([
            'name' => '401(k) Retirement Plan'
        ]);

        // Benefit 4
        \DB::table('benefits')->insert([
            'name' => 'Remote Work Options'
        ]);

        // Benefit 5
        \DB::table('benefits')->insert([
            'name' => 'Professional Development Opportunities'
        ]);

        // Benefit 6
        \DB::table('benefits')->insert([
            'name' => 'Paid Time Off (PTO)'
        ]);

        // Benefit 7
        \DB::table('benefits')->insert([
            'name' => 'Flexible Spending Account (FSA)'
        ]);

        // Benefit 8
        \DB::table('benefits')->insert([
            'name' => 'Dental Insurance'
        ]);

        // Benefit 9
        \DB::table('benefits')->insert([
            'name' => 'Maternity/Paternity Leave'
        ]);

        // Benefit 10
        \DB::table('benefits')->insert([
            'name' => 'Tuition Reimbursement'
        ]);

        // Benefit 11
        \DB::table('benefits')->insert([
            'name' => 'Gym Membership'
        ]);

        // Benefit 12
        \DB::table('benefits')->insert([
            'name' => 'Life Insurance'
        ]);

        // Benefit 13
        \DB::table('benefits')->insert([
            'name' => 'Stock Options'
        ]);

        // Benefit 14
        \DB::table('benefits')->insert([
            'name' => 'Casual Dress Code'
        ]);

        // Benefit 15
        \DB::table('benefits')->insert([
            'name' => 'Wellness Programs'
        ]);

        // Benefit 16
        \DB::table('benefits')->insert([
            'name' => 'Company-sponsored Events'
        ]);

        // Benefit 17
        \DB::table('benefits')->insert([
            'name' => 'Commuter Benefits'
        ]);

        // Benefit 18
        \DB::table('benefits')->insert([
            'name' => 'Vision Insurance'
        ]);

        // Benefit 19
        \DB::table('benefits')->insert([
            'name' => 'Profit Sharing'
        ]);

        // Benefit 20
        \DB::table('benefits')->insert([
            'name' => 'Flexible Location Options'
        ]);

        // Benefit 21
        \DB::table('benefits')->insert([
            'name' => 'Mental Health Support'
        ]);

        // Benefit 22
        \DB::table('benefits')->insert([
            'name' => 'Employee Assistance Program (EAP)'
        ]);

        // Benefit 23
        \DB::table('benefits')->insert([
            'name' => 'Childcare Assistance'
        ]);

        // Benefit 24
        \DB::table('benefits')->insert([
            'name' => 'Meal tickets'
        ]);

    }
}
