<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function index()
    {
        $members = TeamMember::where('is_active', true)->orderBy('sort_order')->get();
        return view('team.index', compact('members'));
    }

    public function show(TeamMember $member)
    {
        return view('team.show', compact('member'));
    }
}
