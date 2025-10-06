<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            ['name' => 'Web Development', 'description' => 'Building responsive websites using PHP, Laravel, Vue.js.', 'icon' => 'bi-code-slash'],
            ['name' => 'UI/UX Design', 'description' => 'Crafting intuitive interfaces with Tailwind CSS and Bootstrap.', 'icon' => 'bi-brush'],
            ['name' => 'API Development', 'description' => 'Creating robust RESTful APIs with Laravel.', 'icon' => 'bi-server'],
            ['name' => 'Database Management', 'description' => 'Optimizing MySQL databases for performance.', 'icon' => 'bi-database'],
            ['name' => 'AI Agent Development', 'description' => 'Developing intelligent AI agents.', 'icon' => 'bi-robot'],
            ['name' => 'Maintenance & Support', 'description' => 'Providing ongoing updates for web apps.', 'icon' => 'bi-tools'],
        ]);
    }
}
