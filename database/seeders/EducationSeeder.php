<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educations')->insert([
            [
                'duration' => '2006 - 2010',
                'institutionName' => 'National University',
                'field' => 'Bachelor of Science',
                'details' => 'Studied core subjects including Mathematic, Programmings, and networking.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'duration' => '2011 - 2012',
                'institutionName' => 'National University',
                'field' => 'Master of Mathematics',
                'details' => 'Focused on advanced software programming and projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'duration' => '2022 - 2024',
                'institutionName' => 'Ostad',
                'field' => 'Full Stack Development',
                'details' => 'Studied in backend and frontend development, including languages in PHP, Laravel, Vue.js, MySQL, and JavaScript.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
