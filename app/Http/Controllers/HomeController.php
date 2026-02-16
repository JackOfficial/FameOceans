<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::with(['author', 'category'])
                     ->latest()
                     ->take(3)->get();
        return view('index', compact('posts'));
    }
}
