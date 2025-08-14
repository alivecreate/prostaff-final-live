<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blog;

class BlogFrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('front.pages.blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
        return view('front.pages.blog-detail', compact('blog'));
    }
}
