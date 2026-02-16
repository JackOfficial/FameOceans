<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       $posts = Post::with(['author', 'category'])
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
        return view('blogs.index', compact('posts'));
    }

     public function show(){
         return view('blogs.show');
    }
}
