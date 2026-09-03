<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Growbox Nepal'],
            ['key' => 'tagline', 'value' => 'Growing Businesses Through Technology'],
            ['key' => 'contact_email', 'value' => 'hello@growboxnepal.com'],
            ['key' => 'contact_phone', 'value' => '+977-XXXXXXXXXX'],
            ['key' => 'stat_projects', 'value' => '50+'],
            ['key' => 'stat_clients', 'value' => '20+'],
            ['key' => 'stat_experts', 'value' => '10+'],
            ['key' => 'stat_years', 'value' => '5+'],
        ];

        foreach ($settings as $s) {
            SiteSetting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
