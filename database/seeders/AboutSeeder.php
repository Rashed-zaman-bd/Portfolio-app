<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->insert([
            ['title' => 'Full Stack Web Developer',
             'details' => 'Get Online and Grow first',
             'created_at' => now(),
             'updated_at' => now()
            ],
        ]);
    }
}
