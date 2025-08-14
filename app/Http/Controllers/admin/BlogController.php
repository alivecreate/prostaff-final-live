<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blog;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Blog::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages

        // Fetch items for the current page
        $items = Blog::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        
        $route = request()->route();
        $routeName = $route->getName();
        
        $page = [
            'name' => 'Blog'
        ];

        return view('admin.pages.blog.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);


        // $blogs = Blog::latest()->get();

        // $page = [
        //     'name' => 'Blog'
        // ];
        // return view('admin.pages.blog.index', compact('page', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $blogs = Blog::orderBy('id', 'desc')->get();
        $page = [
            'name' => 'Blog',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.blog.create', compact('page', 'blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string',
        ]);

        $item_no = Blog::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }

        $image_name = uploadImageThumb($request);

        $blog = Blog::create([
            'item_no' => $item_no, 
            'title' => $request->title, 
            'heading' => $request->heading, 
            'description' => $request->description, 
            'image' => $image_name, 
            'image_title' => $request->image_title, 
            'page_title' => $request->page_title, 
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $blog->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);


        return redirect()->route('blog.create')->with('success', 'Blog added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
        return view('front.pages.blog-detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        

        
        $blogs = Blog::orderBy('id', 'desc')->get();
        $page = [
            'name' => 'Blog'
        ];
        $blog = Blog::with('seo')->find($id);
        // Check if the page is found
        if ($blog) {
            return view('admin.pages.blog.edit', compact('page', 'blog', 'blogs'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('blog.index')->with('error', 'Page not found');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $blog = Blog::find($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $blog->image;
        }


        if ($blog) {
            
            $blog->update([
                'title' => $request->title, 
                'heading' => $request->heading, 
                'description' => $request->description, 
                'image' => $image_name, 
                'image_title' => $request->image_title, 
                'page_title' => $request->page_title, 
                'slug' => $request->slug, 
                'status' => $request->status
            ]);
            
            $blog->seo()->updateOrCreate([], [
                'search_index' => $request->search_index, 
                'search_follow' => $request->search_follow, 
                'canonical_url' => $request->canonical_url, 
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword, 
                'meta_description' => $request->meta_description,
            ]);

            return redirect()->route('blog.edit', ['blog' => $blog->id])
                ->with('success', 'Blog updated successfully');
            }
            else {
                return redirect()->route('blog.index')->with('error', 'Blog not found');
            }
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->route('blog.index')->with('error', 'Blog not found.');
        }

        $blog->delete();
        deleteImages($blog->image);
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    
    }
}
