<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'title' => fake()->words(rand(3, 5), true),
                'price' => rand(100, 800),
                'description' => fake()->words(rand(10, 20), true),
                'img' => fake()->imageUrl(640, 480),
            ]);
        }
    }
}
