<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->take(6)->get();

        $stats = [
            'projects' => SiteSetting::get('stat_projects', '50+'),
            'clients' => SiteSetting::get('stat_clients', '20+'),
            'experts' => SiteSetting::get('stat_experts', '10+'),
            'years' => SiteSetting::get('stat_years', '5+'),
        ];

        return view('home', compact('services', 'stats'));
    }

    public function about()
    {
        return view('about');
    }
}
