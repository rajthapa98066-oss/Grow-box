<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $cats = ['Technology','Software Development','Networking','Cybersecurity','Cloud','Business & IT','Guides'];
        foreach($cats as $c) BlogCategory::updateOrCreate(['slug'=>\Str::slug($c)], ['name'=>$c]);
    }
}
