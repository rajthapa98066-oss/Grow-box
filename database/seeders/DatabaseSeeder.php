<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // core demo seeders
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@growbox.local',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            \Database\Seeders\ServicesTableSeeder::class,
            \Database\Seeders\SiteSettingsSeeder::class,
            \Database\Seeders\ProjectCategoriesSeeder::class,
            \Database\Seeders\ProjectsTableSeeder::class,
            \Database\Seeders\TeamMembersSeeder::class,
            \Database\Seeders\BlogCategoriesSeeder::class,
            \Database\Seeders\BlogPostsSeeder::class,
        ]);
    }
}
