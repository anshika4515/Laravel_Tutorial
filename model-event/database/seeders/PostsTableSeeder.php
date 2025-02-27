<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 10 dummy posts
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'description' => $faker->sentence,
                'counter' => $faker->numberBetween(1, 100),
                'user_id' => $faker->numberBetween(1, 10), // Ensure this matches the user IDs that were generated
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
