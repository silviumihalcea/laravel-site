<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
            
        // Job Domain 1
        \DB::table('domains')->insert([
            'name' => 'Web Development',
            'description' => 'Web development, also known as website development, refers to the tasks associated with creating, building, and maintaining websites and web applications that run online on a browser.'
        ]);

        // Job Domain 2
        \DB::table('domains')->insert([
            'name' => 'Data Science',
            'description' => 'Data science involves the extraction of insights and knowledge from structured and unstructured data. Professionals in this domain use statistical techniques, machine learning, and data analysis tools.'
        ]);

        // Job Domain 3
        \DB::table('domains')->insert([
            'name' => 'Marketing',
            'description' => 'Marketing encompasses various activities aimed at promoting products or services, including market research, advertising, branding, and customer engagement.'
        ]);

        // Job Domain 4
        \DB::table('domains')->insert([
            'name' => 'User Experience (UX) Design',
            'description' => 'UX design focuses on enhancing user satisfaction by improving the usability and accessibility of a product or service. It involves understanding user needs and creating a positive user experience.'
        ]);

        // Job Domain 5
        \DB::table('domains')->insert([
            'name' => 'Project Management',
            'description' => 'Project management involves planning, organizing, and overseeing projects to achieve specific goals. It includes tasks such as budgeting, scheduling, and team coordination.'
        ]);

        // Job Domain 6
        \DB::table('domains')->insert([
            'name' => 'Sales',
            'description' => 'Sales professionals are responsible for selling products or services to customers. This domain includes roles such as sales representative, account executive, and business development manager.'
        ]);

        // Job Domain 7
        \DB::table('domains')->insert([
            'name' => 'Software Engineering',
            'description' => 'Software engineering involves designing, developing, testing, and maintaining software systems. It includes various roles such as software developer, software engineer, and software architect.'
        ]);

        // Job Domain 8
        \DB::table('domains')->insert([
            'name' => 'Human Resources (HR)',
            'description' => 'Human resources professionals manage personnel-related tasks, including recruitment, employee relations, benefits administration, and performance management.'
        ]);

        // Job Domain 9
        \DB::table('domains')->insert([
            'name' => 'Finance',
            'description' => 'Finance professionals deal with financial planning, analysis, and management. This domain includes roles such as financial analyst, accountant, and finance manager.'
        ]);

        // Job Domain 10
        \DB::table('domains')->insert([
            'name' => 'Network Administration',
            'description' => 'Network administrators are responsible for designing, implementing, and managing computer networks within an organization. They ensure the stability and security of the network infrastructure.'
        ]);

        // Job Domain 11
        \DB::table('domains')->insert([
            'name' => 'Graphic Design',
            'description' => 'Graphic designers create visual concepts using computer software or by hand to communicate ideas that inspire, inform, and captivate consumers.'
        ]);

        // Job Domain 12
        \DB::table('domains')->insert([
            'name' => 'Development Operations (DevOps)',
            'description' => 'DevOps is a set of practices that combines software development (Dev) and IT operations (Ops) to shorten the systems development life cycle and deliver high-quality software continuously.'
        ]);

        // Job Domain 13
        \DB::table('domains')->insert([
            'name' => 'Healthcare',
            'description' => 'Healthcare professionals work in the medical field, providing care, conducting research, and managing healthcare organizations to improve the well-being of individuals and communities.'
        ]);

        // Job Domain 14
        \DB::table('domains')->insert([
            'name' => 'Quality Assurance (QA) Testing',
            'description' => 'QA testers are responsible for ensuring the functionality, reliability, and quality of software through systematic testing and debugging processes.'
        ]);

        // Job Domain 15
        \DB::table('domains')->insert([
            'name' => 'Social Media Management',
            'description' => 'Social media managers create and implement strategies to enhance an organization\'s online presence, engage with the audience, and build brand awareness through social media platforms.'
        ]);

        // Job Domain 16
        \DB::table('domains')->insert([
            'name' => 'iOS App Development',
            'description' => "iOS app developers specialize in creating applications for Apple's iOS platform, ensuring seamless and innovative experiences for iPhone and iPad users."
        ]);

        // Job Domain 17
        \DB::table('domains')->insert([
            'name' => 'Legal',
            'description' => 'Legal professionals handle matters related to law and legal regulations. This domain includes roles such as lawyers, legal assistants, and paralegals.'
        ]);

        // Job Domain 18
        \DB::table('domains')->insert([
            'name' => 'Environmental Science',
            'description' => 'Environmental scientists study the natural environment and work to understand and solve environmental problems, such as pollution, climate change, and conservation.'
        ]);

        // Job Domain 19
        \DB::table('domains')->insert([
            'name' => 'E-commerce',
            'description' => 'E-commerce professionals manage online businesses, focusing on the buying and selling of goods and services over the internet. This domain includes roles in online retail, marketing, and logistics.'
        ]);

        // Job Domain 20
        \DB::table('domains')->insert([
            'name' => 'Systems Analysis',
            'description' => 'Systems analysts analyze and design information systems to meet the business needs of organizations. They bridge the gap between business requirements and technology solutions.'
        ]);

    }
}
