<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function film()
    {
    	return inertia('Film');
    }

    public function home()
    {
    	return inertia('Home');
    }

    public function news()
    {
    	return inertia('News-Show');
    }

    public function Video()
    {
    	return inertia('Video-Show');
    }
}
