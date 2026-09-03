<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\User;

class BlogPostsSeeder extends Seeder
{
    public function run(): void
    {
        $author = User::first();
        $map = [];
        foreach(BlogCategory::all() as $c) $map[$c->name] = $c->id;

        $posts = [
            ['title'=>'How to Choose the Right IT Solution for Your Business','slug'=>'choose-right-it-solution','category'=>'Business & IT','excerpt'=>'Technology should solve a problem, not create another one. Here are questions to consider.'],
            ['title'=>'What Is Network Monitoring and Why Does Your Business Need It?','slug'=>'what-is-network-monitoring','category'=>'Networking','excerpt'=>'Network monitoring helps identify availability and performance issues early.'],
            ['title'=>'Cloud vs On-Premise: Which Is Right for Your Business?','slug'=>'cloud-vs-onpremise','category'=>'Cloud','excerpt'=>'Cloud not always right. Compare practical differences.'],
            ['title'=>'Why Every Business Needs a Backup Strategy','slug'=>'backup-strategy','category'=>'Cybersecurity','excerpt'=>'Backups give businesses path to recover when things go wrong.'],
        ];

        foreach($posts as $p) {
            BlogPost::updateOrCreate(['slug'=>$p['slug']], [
                'title'=>$p['title'],
                'excerpt'=>$p['excerpt'],
                'content'=>'Placeholder content for demo post.',
                'author_id'=>$author?->id,
                'category_id'=>$map[$p['category']] ?? null,
                'published_at'=>now(),
                'is_published'=>true,
            ]);
        }
    }
}
