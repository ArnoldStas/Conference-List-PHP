<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        $conferences = [
            [
                'title' => 'Tarptautinė Internetinių Technologijų Konferencija 2025',
                'description' => 'Išsami konferencija, apimanti naujausias internetinių technologijų tendencijas, įskaitant React, Vue.js ir Laravel. Prisijunkite prie pramonės ekspertų ir bendraukite su kolegomis programuotojais.',
                'date' => '2025-03-15',
                'address' => 'Vilniaus Technologijų Parkas, Saulėtekio al. 15',
                'country' => 'Lietuva',
                'city' => 'Vilnius',
                'participants_count' => 500,
            ],
            [
                'title' => 'PHP Programuotojų Susitikimas',
                'description' => 'Metinis PHP programuotojų susibūrimas aptarti geriausias praktikas, naujas PHP 8.3 funkcijas ir karkasų atnaujinimus. Įtraukia dirbtuves ir praktines sesijas.',
                'date' => '2025-04-22',
                'address' => 'Kauno Kongresų Centras, K. Donelaičio g. 60',
                'country' => 'Lietuva',
                'city' => 'Kaunas',
                'participants_count' => 300,
            ],
            [
                'title' => 'Debesų Kompiuterijos ir DevOps Konferencija',
                'description' => 'Susipažinkite su debesų infrastruktūros pasauliu, kontainerizacija naudojant Docker ir Kubernetes, CI/CD procesais bei šiuolaikinėmis DevOps praktikomis.',
                'date' => '2025-05-10',
                'address' => 'Vilniaus Konferencijų Salė, Konstitucijos pr. 26',
                'country' => 'Lietuva',
                'city' => 'Vilnius',
                'participants_count' => 400,
            ],
            [
                'title' => 'Dirbtinio Intelekto ir Mašininio Mokymosi Simpoziumas',
                'description' => 'Giliai panerkite į dirbtinį intelektą, mašininio mokymosi algoritmus, neuroninius tinklus ir praktinį pritaikymą šiuolaikinėje programinės įrangos kūrime.',
                'date' => '2025-06-18',
                'address' => 'Klaipėdos Mokslo ir Technologijų Parkas, Mokslininku g. 4',
                'country' => 'Lietuva',
                'city' => 'Klaipėda',
                'participants_count' => 250,
            ],
            [
                'title' => 'Kibernetinio Saugumo ir Duomenų Privatumo Forumas',
                'description' => 'Kritinės diskusijos apie kibernetinio saugumo grėsmes, duomenų apsaugos reglamentus (BDAR), saugaus kodavimo praktikas ir privatumą pirmenybę teikiančius kūrimo metodus.',
                'date' => '2025-07-25',
                'address' => 'Vilniaus Universitetas, Universiteto g. 3',
                'country' => 'Lietuva',
                'city' => 'Vilnius',
                'participants_count' => 350,
            ],
        ];

        foreach ($conferences as $conference) {
            Conference::create($conference);
        }
    }
}
