<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerControllers extends Controller
{
    public function partners(){
        return view('partners');
    }
}
