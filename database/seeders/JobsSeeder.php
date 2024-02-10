<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Job 0
        \DB::table('jobs')->insert([
           'name' =>'Back-end developer',
           'tag' =>str_replace(' ', '-', strtolower('Back-end developer')),
           'description' => "We're seeking a skilled developer to design, implement, and maintain server-side logic, ensuring seamless integration with front-end elements. If you're passionate about clean, efficient code and thrive in a collaborative environment, apply today!",
           'employer_id' => 1,
           'domain_id' => 3,
           'experience_id' => 1,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-01-01'
        ]);

        // Job 1
        \DB::table('jobs')->insert([
           'name' =>'Software Engineer',
           'tag' =>str_replace(' ', '-', strtolower('Software Engineer')),
           'description' => "We're looking for a talented Software Engineer to design and implement software solutions. Join our team if you have a passion for coding and problem-solving!",
           'employer_id' => 4,
           'domain_id' => 6,
           'experience_id' => 2,
           'work_preferences_id' => 2,
           'language_id' => 1,
           'expired_at' =>'2025-03-01'
        ]);
        
        // Job 2
        \DB::table('jobs')->insert([
           'name' =>'UX/UI Designer',
           'tag' =>str_replace(' ', '-', strtolower('UX-UI Designer')),
           'description' => "Exciting opportunity for a UX/UI Designer! Join our creative team to shape user experiences and create visually stunning designs.",
           'employer_id' => 2,
           'domain_id' => 7,
           'experience_id' => 3,
           'work_preferences_id' => 1,
           'language_id' => 2,
           'expired_at' =>'2025-03-15'
        ]);
        
        // Job 3
        \DB::table('jobs')->insert([
           'name' =>'Business Analyst',
           'tag' =>str_replace(' ', '-', strtolower('Business Analyst')),
           'description' => "Join us as a Business Analyst to analyze and document business processes. If you have strong analytical skills and a knack for problem-solving, apply now!",
           'employer_id' => 3,
           'domain_id' => 8,
           'experience_id' => 2,
           'work_preferences_id' => 3,
           'language_id' => 3,
           'expired_at' =>'2025-04-01'
        ]);
        
        // Job 4
        \DB::table('jobs')->insert([
           'name' =>'IT Project Manager',
           'tag' =>str_replace(' ', '-', strtolower('IT Project Manager')),
           'description' => "Exciting opportunity for an IT Project Manager! Lead and deliver IT projects successfully. If you have strong leadership skills, we want to hear from you.",
           'employer_id' => 1,
           'domain_id' => 9,
           'experience_id' => 4,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-04-15'
        ]);
        
        // Job 5
        \DB::table('jobs')->insert([
           'name' =>'Customer Success Manager',
           'tag' =>str_replace(' ', '-', strtolower('Customer Success Manager')),
           'description' => "Join our team as a Customer Success Manager! Build and maintain strong relationships with our clients to ensure their success and satisfaction.",
           'employer_id' => 4,
           'domain_id' => 10,
           'experience_id' => 3,
           'work_preferences_id' => 2,
           'language_id' => 4,
           'expired_at' =>'2025-05-01'
        ]);
        
        // Job 6
        \DB::table('jobs')->insert([
           'name' =>'Quality Assurance Analyst',
           'tag' =>str_replace(' ', '-', strtolower('Quality Assurance Analyst')),
           'description' => "We're hiring a Quality Assurance Analyst to ensure the functionality and reliability of our software. If you have a keen eye for detail, apply now!",
           'employer_id' => 2,
           'domain_id' => 11,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-05-15'
        ]);
        
        // Job 7
        \DB::table('jobs')->insert([
           'name' =>'Digital Analyst',
           'tag' =>str_replace(' ', '-', strtolower('Digital Analyst')),
           'description' => "Exciting opportunity for a Digital Analyst! Analyze digital data to provide insights and recommendations for our online presence and campaigns.",
           'employer_id' => 3,
           'domain_id' => 12,
           'experience_id' => 3,
           'work_preferences_id' => 2,
           'language_id' => 1,
           'expired_at' =>'2025-06-01'
        ]);

        // Job 8
        \DB::table('jobs')->insert([
           'name' =>'Network Engineer',
           'tag' =>str_replace(' ', '-', strtolower('Network Engineer')),
           'description' => "Join us as a Network Engineer to design and implement computer networks. If you have expertise in network infrastructure, we want to hear from you!",
           'employer_id' => 1,
           'domain_id' => 13,
           'experience_id' => 3,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-06-15'
        ]);
        
        // Job 9
        \DB::table('jobs')->insert([
           'name' =>'Content Marketing Specialist',
           'tag' =>str_replace(' ', '-', strtolower('Content Marketing Specialist')),
           'description' => "We're hiring a Content Marketing Specialist to create compelling content and drive our content marketing strategy. Join our team if you have a passion for storytelling!",
           'employer_id' => 4,
           'domain_id' => 14,
           'experience_id' => 2,
           'work_preferences_id' => 2,
           'language_id' => 2,
           'expired_at' =>'2025-07-01'
        ]);
        
        // Job 10
        \DB::table('jobs')->insert([
           'name' =>'AI/ML Researcher',
           'tag' =>str_replace(' ', '-', strtolower('AI-ML Researcher')),
           'description' => "Exciting opportunity for an AI/ML Researcher! Contribute to cutting-edge research and development in artificial intelligence and machine learning.",
           'employer_id' => 2,
           'domain_id' => 15,
           'experience_id' => 4,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-07-15'
        ]);

        
        // Job 11
        \DB::table('jobs')->insert([
           'name' =>'Mobile App Developer',
           'tag' =>str_replace(' ', '-', strtolower('Mobile App Developer')),
           'description' => "We're seeking a Mobile App Developer to create innovative and user-friendly mobile applications. If you have a passion for mobile development, join our team!",
           'employer_id' => 3,
           'domain_id' => 16,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-08-01'
        ]);

        // Job 12
        \DB::table('jobs')->insert([
           'name' =>'HR Generalist',
           'tag' =>str_replace(' ', '-', strtolower('HR Generalist')),
           'description' => "Join us as an HR Generalist! Contribute to various HR functions, including recruitment, employee relations, and performance management.",
           'employer_id' => 1,
           'domain_id' => 17,
           'experience_id' => 3,
           'work_preferences_id' => 3,
           'language_id' => 1,
           'expired_at' =>'2025-08-15'
        ]);

        // Job 13
        \DB::table('jobs')->insert([
           'name' =>'Cloud Solutions Architect',
           'tag' =>str_replace(' ', '-', strtolower('Cloud Solutions Architect')),
           'description' => "Exciting opportunity for a Cloud Solutions Architect! Design and implement scalable and secure cloud solutions for our projects.",
           'employer_id' => 2,
           'domain_id' => 18,
           'experience_id' => 4,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-09-01'
        ]);

        // Job 14
        \DB::table('jobs')->insert([
           'name' =>'Digital Illustrator',
           'tag' =>str_replace(' ', '-', strtolower('Digital Illustrator')),
           'description' => "We're hiring a Digital Illustrator to create visually stunning digital artwork. If you have a creative flair and technical skills, apply now!",
           'employer_id' => 4,
           'domain_id' => 19,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 4,
           'expired_at' =>'2025-09-15'
        ]);

        // Job 15
        \DB::table('jobs')->insert([
           'name' =>'Supply Chain Analyst',
           'tag' =>str_replace(' ', '-', strtolower('Supply Chain Analyst')),
           'description' => "Join our team as a Supply Chain Analyst! Analyze and optimize our supply chain processes for efficiency and cost-effectiveness.",
           'employer_id' => 3,
           'domain_id' => 20,
           'experience_id' => 3,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-10-01'
        ]);

        // Job 16
        \DB::table('jobs')->insert([
           'name' =>'Technical Support Engineer',
           'tag' =>str_replace(' ', '-', strtolower('Technical Support Engineer')),
           'description' => "We're hiring a Technical Support Engineer to provide expert technical assistance to our customers. If you enjoy troubleshooting and helping others, apply now!",
           'employer_id' => 1,
           'domain_id' => 11,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-10-15'
        ]);

        // Job 17
        \DB::table('jobs')->insert([
           'name' =>'Biomedical Researcher',
           'tag' =>str_replace(' ', '-', strtolower('Biomedical Researcher')),
           'description' => "Exciting opportunity for a Biomedical Researcher! Contribute to groundbreaking research in the field of biomedical sciences.",
           'employer_id' => 2,
           'domain_id' => 7,
           'experience_id' => 4,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-11-01'
        ]);

        // Job 18
        \DB::table('jobs')->insert([
           'name' =>'Social Media Coordinator',
           'tag' =>str_replace(' ', '-', strtolower('Social Media Coordinator')),
           'description' => "Join us as a Social Media Coordinator! Manage and execute social media campaigns to enhance our online presence and engagement.",
           'employer_id' => 4,
           'domain_id' => 2,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-11-15'
        ]);

        // Job 19
        \DB::table('jobs')->insert([
           'name' =>'Database Administrator',
           'tag' =>str_replace(' ', '-', strtolower('Database Administrator')),
           'description' => "We're hiring a Database Administrator to ensure the security and performance of our database systems. If you have expertise in database management, apply now!",
           'employer_id' => 3,
           'domain_id' => 5,
           'experience_id' => 3,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-12-01'
        ]);

        // Job 20
        \DB::table('jobs')->insert([
           'name' =>'Content Strategist',
           'tag' =>str_replace(' ', '-', strtolower('Content Strategist')),
           'description' => "Exciting opportunity for a Content Strategist! Develop and implement content strategies to enhance our brand and reach our target audience.",
           'employer_id' => 1,
           'domain_id' => 16,
           'experience_id' => 2,
           'work_preferences_id' => 1,
           'language_id' => 1,
           'expired_at' =>'2025-12-15'
        ]);


    }
}
