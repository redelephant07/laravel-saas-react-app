<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\User;
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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin1234')
        ]);

        Feature::factory()->create([
            'image' => '',
            'route_name' => 'Feature 1',
            'name' => 'feature1.index',
            'description' => 'This is feature 1',
            'required_credits' => 3,
            'active' =>true,
        ]);

        Feature::factory()->create([
            'image' => '',
            'route_name' => 'Feature 2',
            'name' => 'feature2.index',
            'description' => 'This is feature 2',
            'required_credits' => 2,
            'active' => true,
        ]);

    }
}
