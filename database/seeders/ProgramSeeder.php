<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('programs')->insert([
            [
                'title' => 'Education for All',
                'description' => 'A program focused on providing education opportunities for underprivileged children.',
                'icon' => 'education-icon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health and Wellness',
                'description' => 'Promoting health and wellness initiatives in rural communities.',
                'icon' => 'health-icon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
