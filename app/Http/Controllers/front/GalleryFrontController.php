<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\admin\Gallery;

class GalleryFrontController extends Controller
{
    public function index()
{
    $items = \App\Models\admin\Gallery::orderBy('id', 'desc')->get();

    return view('front.pages.gallery', compact('items'));
}

}
