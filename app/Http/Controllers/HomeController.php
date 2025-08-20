<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $announcements = \App\Models\Announcement::all();
        return view('homepage.homepage', compact('announcements'));

    }
}
