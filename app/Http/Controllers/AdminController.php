<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Post;
use Faker\Provider\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    $posts = Post::count();
    return view('admin.index', Compact('posts'));
   }
}
