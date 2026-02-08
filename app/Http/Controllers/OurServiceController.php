<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function services(){
    return view('services');
   }
}
