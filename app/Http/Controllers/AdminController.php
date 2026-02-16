<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Faker\Provider\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
    $posts = BlogCategory::count();
    return view('admin.index', Compact('posts'));
   }
}
