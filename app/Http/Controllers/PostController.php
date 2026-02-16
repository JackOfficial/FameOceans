<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(Request $request)
{
    $query = Post::with(['author', 'category'])->latest();

    // Search Logic
    if ($request->has('search')) {
        $searchTerm = $request->search;
        $query->where('title', 'LIKE', "%{$searchTerm}%")
              ->orWhere('content', 'LIKE', "%{$searchTerm}%");
    }

    $posts = $query->paginate(10);
    $categories = BlogCategory::withCount('posts')->get();
    $recent_posts = Post::latest()->take(5)->get();

    return view('blogs.index', compact('posts', 'categories', 'recent_posts'));
}

     public function show(){
         return view('blogs.show');
    }
}
