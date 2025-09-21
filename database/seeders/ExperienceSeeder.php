<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'duration' => '2023 - 2025',
                'title' => 'Software Developer',
                'designation' => 'Full Stack Developer',
                'details' => 'Worked on Laravel and Vue.js applications, handled database design and API integrations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'duration' => 'February 2025 - August 2025',
                'title' => 'Senior Software Engineer',
                'designation' => 'Team Lead (Laravel + Vue)',
                'details' => 'Leading a team of developers, managing client projects, and implementing best coding practices.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
