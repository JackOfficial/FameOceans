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

        public function show($slug)
    {
        // 1. Fetch the post by slug or fail with a 404
        $post = Post::with(['author', 'category'])
                    ->where('slug', $slug)
                    ->firstOrFail();

        // 2. Fetch Related Posts (same category, excluding current post)
        $related_posts = Post::where('category_id', $post->category_id)
                             ->where('id', '!=', $post->id)
                             ->latest()
                             ->take(3)
                             ->get();

        // 3. Optional: Increment view count if you have a 'views' column
        // $post->increment('views');

        return view('blogs.show', compact('post', 'related_posts'));
    }
}
