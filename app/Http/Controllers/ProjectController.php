<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $query = Project::where('is_published', true)->with('category')->orderBy('is_featured','desc')->latest();
        if($category) {
            $query->whereHas('category', function($q) use ($category){ $q->where('slug',$category); });
        }
        $projects = $query->paginate(9);
        $categories = ProjectCategory::all();
        return view('projects.index', compact('projects','categories'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
