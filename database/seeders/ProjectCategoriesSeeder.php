<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectCategory;

class ProjectCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $cats = [
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Custom Software', 'slug' => 'custom-software'],
            ['name' => 'Infrastructure', 'slug' => 'infrastructure'],
            ['name' => 'Networking', 'slug' => 'networking'],
            ['name' => 'Cloud', 'slug' => 'cloud'],
            ['name' => 'UI/UX', 'slug' => 'ui-ux'],
        ];
        foreach($cats as $c) ProjectCategory::updateOrCreate(['slug'=>$c['slug']], $c);
    }
}
