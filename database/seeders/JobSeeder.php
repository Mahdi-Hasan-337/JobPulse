<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {

    public function run(): void {
        $jobs = [
            [
                'user_id' => 1,
                'title' => 'Software Engineer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'benefits' => 'Health insurance, retirement plan',
                'location' => 'New York',
                'deadline' => now()->addDays(30),
            ],
            [
                'user_id' => 2,
                'title' => 'Data Analyst',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'benefits' => 'Flexible work hours, remote work option',
                'location' => 'San Francisco',
                'deadline' => now()->addDays(45),
            ],
            [
                'user_id' => 3,
                'title' => 'Product Manager',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'benefits' => 'Stock options, annual bonus',
                'location' => 'Seattle',
                'deadline' => now()->addDays(60),
            ],
            [
                'user_id' => 4,
                'title' => 'Marketing Specialist',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'benefits' => 'Paid time off, gym membership reimbursement',
                'location' => 'Chicago',
                'deadline' => now()->addDays(30),
            ],
            [
                'user_id' => 5,
                'title' => 'Graphic Designer',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'benefits' => 'Remote work option, creative environment',
                'location' => 'Los Angeles',
                'deadline' => now()->addDays(45),
            ],
            [
                'user_id' => 6,
                'title' => 'Financial Analyst',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'benefits' => '401(k) plan, professional development support',
                'location' => 'Boston',
                'deadline' => now()->addDays(60),
            ],
            [
                'user_id' => 7,
                'title' => 'HR Manager',
                'description' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',
                'benefits' => 'Health and wellness programs, flexible scheduling',
                'location' => 'Austin',
                'deadline' => now()->addDays(30),
            ],
            [
                'user_id' => 8,
                'title' => 'Customer Success Manager',
                'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.',
                'benefits' => 'Remote work option, performance bonuses',
                'location' => 'Denver',
                'deadline' => now()->addDays(45),
            ],
            [
                'user_id' => 9,
                'title' => 'Sales Representative',
                'description' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
                'benefits' => 'Uncapped commission, company car',
                'location' => 'Miami',
                'deadline' => now()->addDays(60),
            ],
            [
                'user_id' => 10,
                'title' => 'Quality Assurance Engineer',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'benefits' => 'Flexible work hours, remote work option',
                'location' => 'Portland',
                'deadline' => now()->addDays(30),
            ],
        ];

        // Insert data into the jobs table
        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
