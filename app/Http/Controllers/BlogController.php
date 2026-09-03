<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $query = BlogPost::where('is_published', true)->with('category','author')->latest('published_at');
        if($category) $query->whereHas('category', fn($q)=>$q->where('slug',$category));
        $posts = $query->paginate(10);
        $categories = BlogCategory::all();
        return view('blog.index', compact('posts','categories'));
    }

    public function show(BlogPost $post)
    {
        return view('blog.show', compact('post'));
    }
}
