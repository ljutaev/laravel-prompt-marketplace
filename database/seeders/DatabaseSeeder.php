<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Post::factory(10)->create([
        //     'user_id' => 1,
        // ]);
        $this->call([
            PostSeeder::class
        ]);

        foreach (range(1,50) as $index) {
            \App\Models\Postmeta::create([
                'post_id' => $index,
                'key' => 'short_description',
                'value' => fake()->sentence(10),
        ]);
        }
               
    }
}
