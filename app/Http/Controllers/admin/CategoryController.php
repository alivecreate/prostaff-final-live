<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Testimonial;
use App\Models\admin\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Category::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages

        // Fetch items for the current page
        $items = Category::skip(($currentPage - 1) * $perPage)->take($perPage)->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Category'
        ];

        return view('admin.pages.category.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);


        $categories = Category::latest()->get();

        $page = [
            'name' => 'Category'
        ];
        return view('admin.pages.category.index', compact('page', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = Category::orderBy('name', 'asc')->get();
        $page = [
            'name' => 'Category',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.category.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
        ]);

        $item_no = Category::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }

        $image_name = uploadImageThumb($request);

        $category = Category::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'heading' => $request->heading, 
            'parent_id' => $request->parent_id, 
            'description' => $request->description, 
            'full_description' => $request->full_description, 
            'image' => $image_name, 
            'image_title' => $request->image_title, 
            'page_title' => $request->page_title, 
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $category->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);


        return redirect()->route('category.create')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        

        
        $categories = Category::orderBy('name', 'asc')->get();
        $page = [
            'name' => 'Category'
        ];
        $category = Category::with('seo')->find($id);
        // Check if the page is found
        if ($category) {
            return view('admin.pages.category.edit', compact('page', 'category', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('category.index')->with('error', 'Page not found');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $category = Category::find($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $category->image;
        }


        if ($category) {
            
            $category->update([
                'name' => $request->name, 
                'heading' => $request->heading, 
                'parent_id' => $request->parent_id, 
                'description' => $request->description, 
                'full_description' => $request->full_description, 
                'image' => $image_name, 
                'image_title' => $request->image_title, 
                'page_title' => $request->page_title, 
                'slug' => $request->slug, 
                'status' => $request->status
            ]);
            
            $category->seo()->updateOrCreate([], [
                'search_index' => $request->search_index, 
                'search_follow' => $request->search_follow, 
                'canonical_url' => $request->canonical_url, 
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword, 
                'meta_description' => $request->meta_description,
            ]);

            return redirect()->route('category.edit', ['category' => $category->id])
                ->with('success', 'Category updated successfully');
            }
            else {
                return redirect()->route('category.index')->with('error', 'Category not found');
            }
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'category not found.');
        }

        $category->delete();
        deleteImages($category->image);
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    
    }

public function show($slug)
{
    $category = Category::with('services')->where('slug', $slug)->first();

    if (!$category) {
        abort(404, 'Category not found.');
    }

    return view('front.pages.services', compact('category'));
}

}
