<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PartnerInquiry;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['author', 'category'])
                     ->latest()
                     ->take(3)
                     ->where('status', 'published')
                     ->get();

        $partners = PartnerInquiry::where('status', 'reviewed')->take(5)->get();

        return view('index', compact('posts', 'partners'));
    }
}