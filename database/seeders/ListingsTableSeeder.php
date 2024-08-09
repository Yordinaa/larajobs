<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         DB::table('listings')->insert([
             [
                 'title' => 'Software Engineer',
                 'tags' => 'PHP, Laravel',
                 'company' => 'Tech Corp',
                 'location' => 'New York',
                 'email' => 'contact@techcorp.com',
                 'website' => 'https://techcorp.com',
                 'description' => 'A great opportunity to work with cutting-edge technology.',
             ],
             [
                 'title' => 'Web Developer',
                 'tags' => 'JavaScript, React',
                 'company' => 'Web Solutions',
                 'location' => 'San Francisco',
                 'email' => 'info@websolutions.com',
                 'website' => 'https://websolutions.com',
                 'description' => 'Join our team and work on exciting web projects.',
             ],

         ]);
     }
 }