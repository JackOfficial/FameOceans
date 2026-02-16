<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       $posts = Post::with(['author', 'category'])
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
        $categories = BlogCategory::all(); 
        $recent_posts =  $posts = Post::with(['author', 'category'])
                     ->latest()
                     ->take(5)->get();            
        return view('blogs.index', compact('posts', 'categories', 'recent_posts'));
    }

     public function show(){
         return view('blogs.show');
    }
}
