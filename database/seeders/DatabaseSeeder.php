<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Listing::factory(6)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'laravel senior developer',
        //     'tags' => 'aravel, javascriptl',
        //     'company' => 'yo corp',
        //     'location' => 'bole',
        //     'email' => 'yo@gmail.com',
        //     'website' => 'https://www.yo.com',
        //     'description' => 'fdbvgdfhxdhhbxhbfvxhjvhjcxvhbchbfjvjvj'
        // ]);
        // Listing::create([
        //     'title' => 'laravel junior developer',
        //     'tags' => 'php, javascriptl',
        //     'company' => 'newtech corp',
        //     'location' => 'bole',
        //     'email' => 'newtech@gmail.com',
        //     'website' => 'https://www.newtech.com',
        //     'description' => 'fdbvgdfhxdhhbxhbfvxhjvhjcxvhbchbfjvjvj'
        // ]);
    }
}