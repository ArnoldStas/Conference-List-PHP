<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        $conferences = [
            [
                'title' => 'International Web Development Conference 2025',
                'description' => 'A comprehensive conference covering the latest trends in web development, including React, Vue.js, and Laravel. Join industry experts and network with fellow developers.',
                'date' => '2025-03-15',
                'address' => 'Vilnius Tech Park, Saulėtekio al. 15, Vilnius, Lithuania',
            ],
            [
                'title' => 'PHP Developers Summit',
                'description' => 'Annual gathering of PHP developers to discuss best practices, new features in PHP 8.3, and framework updates. Includes workshops and hands-on sessions.',
                'date' => '2025-04-22',
                'address' => 'Kaunas Congress Centre, K. Donelaičio g. 60, Kaunas, Lithuania',
            ],
            [
                'title' => 'Cloud Computing & DevOps Conference',
                'description' => 'Explore the world of cloud infrastructure, containerization with Docker and Kubernetes, CI/CD pipelines, and modern DevOps practices.',
                'date' => '2025-05-10',
                'address' => 'Vilnius Conference Hall, Konstitucijos pr. 26, Vilnius, Lithuania',
            ],
            [
                'title' => 'AI and Machine Learning Symposium',
                'description' => 'Deep dive into artificial intelligence, machine learning algorithms, neural networks, and practical applications in modern software development.',
                'date' => '2025-06-18',
                'address' => 'Klaipėda Science and Technology Park, Mokslininku g. 4, Klaipėda, Lithuania',
            ],
            [
                'title' => 'Cybersecurity & Data Privacy Forum',
                'description' => 'Critical discussions on cybersecurity threats, data protection regulations (GDPR), secure coding practices, and privacy-first development approaches.',
                'date' => '2025-07-25',
                'address' => 'Vilnius University, Universiteto g. 3, Vilnius, Lithuania',
            ],
        ];

        foreach ($conferences as $conference) {
            Conference::create($conference);
        }
    }
}
