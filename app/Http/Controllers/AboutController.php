<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerInquiry;

class AboutController extends Controller
{
    public function about(){
        $partners = PartnerInquiry::latest()->get();
        return view('about', compact('partners'));
    }
}
