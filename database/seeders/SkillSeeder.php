<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'PHP', 'level' => 70],
            ['name' => 'Laravel', 'level' => 80],
            ['name' => 'Vue', 'level' => 80],
            ['name' => 'JavaScript', 'level' => 75],
            ['name' => 'HTML', 'level' => 90],
            ['name' => 'CSS', 'level' => 85],
            ['name' => 'Photoshop', 'level' => 50],
        ]);
    }
}
