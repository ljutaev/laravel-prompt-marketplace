<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('type', 'blog')
            ->where('lang', app()->getLocale())
            ->with('shortDescription')
            ->where('status', 1)
            ->latest()
            ->take(3)
            ->get();
        
    	return inertia('Frontend/Home/Index', ['posts' => $posts]);
    }
}
