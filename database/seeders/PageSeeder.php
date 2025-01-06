<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'About Us',
                'content' => 'This is the About Us page content.',
                'slug' => 'about-us',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contact Us',
                'content' => 'This is the Contact Us page content.',
                'slug' => 'contact-us',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
