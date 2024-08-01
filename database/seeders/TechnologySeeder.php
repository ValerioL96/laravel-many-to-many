<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologiesData = [
            [
                'name' => 'JavaScript',
                'color' => '#F0DB4F'
            ],
            [
                'name' => 'Python',
                'color' => '#306998'
            ],
            [
                'name' => 'Java',
                'color' => '#b07219'
            ],
            [
                'name' => 'C++',
                'color' => '#004482'
            ],
            [
                'name' => 'PHP',
                'color' => '#4F5D95'
            ],
            [
                'name' => 'Ruby',
                'color' => '#701516'
            ],
            [
                'name' => 'Go',
                'color' => '#00ADD8'
            ],
            [
                'name' => 'Swift',
                'color' => '#FA7343'
            ],
            [
                'name' => 'Kotlin',
                'color' => '#A97BFF'
            ],
            [
                'name' => 'TypeScript',
                'color' => '#3178C6'
            ],
            [
                'name' => 'Rust',
                'color' => '#DEA584'
            ],
            [
                'name' => 'Scala',
                'color' => '#DC322F'
            ],
            [
                'name' => 'Dart',
                'color' => '#00B4AB'
            ],
            [
                'name' => 'HTML',
                'color' => '#E34C26'
            ],
            [
                'name' => 'CSS',
                'color' => '#1572B6'
            ],
            [
                'name' => 'SQL',
                'color' => '#4479A1'
            ],
            [
                'name' => 'R',
                'color' => '#276DC3'
            ],
            [
                'name' => 'Perl',
                'color' => '#39457E'
            ],
            [
                'name' => 'Haskell',
                'color' => '#5D4F85'
            ],
            [
                'name' => 'Elixir',
                'color' => '#4B275F'
            ]
        ];

        foreach ($technologiesData as $technologyData) {
            Technology::create($technologyData);
        }
    }
}
