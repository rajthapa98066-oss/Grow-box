<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        $mapping = [];
        foreach(ProjectCategory::all() as $c) $mapping[$c->slug] = $c->id;

        $demos = [
            [
                'title'=>'Growbox Inventory (Concept Project)',
                'slug'=>'growbox-inventory',
                'client'=>null,
                'category'=>'custom-software',
                'description'=>'A centralized inventory management system for assets and equipment.',
                'content'=>'Concept project demonstrating inventory management features.',
                'technologies'=>['Laravel','MySQL','Tailwind CSS'],
                'is_featured'=>true,
                'is_published'=>true,
            ],
            [
                'title'=>'Business Management Platform (Demo)',
                'slug'=>'business-management-platform',
                'category'=>'custom-software',
                'description'=>'Centralized platform for business operations and reporting.',
                'technologies'=>['Laravel','Vue.js'],
                'is_published'=>true,
            ],
            [
                'title'=>'Network Monitoring Solution (Concept)',
                'slug'=>'network-monitoring-solution',
                'category'=>'infrastructure',
                'description'=>'Monitoring solution for network availability and performance.',
                'technologies'=>['SNMP','Linux'],
                'is_published'=>true,
            ],
            [
                'title'=>'Digital Business Website (Demo)',
                'slug'=>'digital-business-website',
                'category'=>'web-development',
                'description'=>'Responsive website template for businesses.',
                'technologies'=>['Laravel','Tailwind CSS'],
                'is_published'=>true,
            ],
        ];

        foreach($demos as $p) {
            Project::updateOrCreate(['slug'=>$p['slug']], array_merge($p, ['category_id'=>$mapping[$p['category']] ?? null]));
        }
    }
}
