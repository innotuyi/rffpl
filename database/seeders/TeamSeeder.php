<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'name' => 'John Doe',
                'role' => 'Project Manager',
                'bio' => 'John has over 10 years of experience in managing projects.',
                'photo' => 'john_doe.jpg',
                'contact_link' => 'https://linkedin.com/in/johndoe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'Volunteer Coordinator',
                'bio' => 'Jane coordinates all volunteer activities and recruitment.',
                'photo' => 'jane_smith.jpg',
                'contact_link' => 'https://linkedin.com/in/janesmith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
