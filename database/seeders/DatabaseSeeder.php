<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Greeting;
use App\Models\Article;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Greeting::create(['greeting' => 'Hello']);
        Greeting::create(['greeting' => 'Hi']);
        Greeting::create(['greeting' => 'Hey']);
        Greeting::create(['greeting' => 'Howdy']);

        Article::factory()
            ->count(50)
            ->create();
    }
}
