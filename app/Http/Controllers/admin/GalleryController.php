<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Gallery;
use App\Models\admin\Category;
use App\Models\admin\GalleryImage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Gallery::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages
        // $items = Gallery::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        // $items = Gallery::get();

        $items = Gallery::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Gallery'
        ];

        return view('admin.pages.gallery.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name', 'asc')->get();

        
        $page = [
            'name' => 'Gallery',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.gallery.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
        ]
    );
        

        $gallery = Gallery::latest()->first();
        if($gallery){
            $item_no =  $gallery->item_no + 1;
        }else{
            $item_no = 1;
        }

 
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = null;
        }


        $gallery = Gallery::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'description' => $request->description, 
            'image' => $image_name, 
            'gallery' => $request->gallery,
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $gallery->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);


        if($request->file('gallery') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $gallery->images()->create([
                    'gallery_id' => $gallery->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            }   
    }

        return redirect()->route('gallery.create')->with('success', 'Gallery added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $categories = Category::orderBy('name', 'asc')->get();
        $page = [
            'name' => 'Gallery'
        ];
        $gallery = Gallery::with('seo')->find($id);
        // Check if the page is found
        if ($gallery) {
            return view('admin.pages.gallery.edit', compact('page', 'gallery', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('gallery.index')->with('error', 'Page not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            // 'slug' => 'required|string',
        ]);
        
        // dd($request->all());
                
        $gallery = Gallery::find($id);
        
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $gallery->image;
        }

        if ($gallery) {
            
            $gallery->update([
                'name' => $request->name,
                'category_id' => $request->category_id, 
                'description' => $request->description, 
                'image' => $image_name, 
                'slug' => $request->slug, 
                'status' => $request->status
            ]);
            
            $gallery->seo()->updateOrCreate([], [
                'search_index' => $request->search_index, 
                'search_follow' => $request->search_follow, 
                'canonical_url' => $request->canonical_url, 
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword, 
                'meta_description' => $request->meta_description,
            ]);

            
        if($request->file('images') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $gallery->images()->create([
                    'gallery_id' => $gallery->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            } 
        } 

            return redirect()->route('gallery.edit', ['gallery' => $gallery->id])
                ->with('success', 'Gallery updated successfully');
            }
            else {
                return redirect()->back()->with('error', 'Gallery not found');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $gallery_images = GalleryImage::where('gallery_id', $id)->get();
        
        // dd($gallery_images);

        $gallery = Gallery::find($id);
        if (!$gallery) {
            return redirect()->route('gallery.index')->with('error', 'Gallery not found.');
        }
        $gallery->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                               

        foreach($gallery_images as $gallery){
            deleteImages($gallery->image);
        }
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    
    }


    
    public function galleryImage($id)
    {
    //    dd($id);
        $image = GalleryImage::where('image', $id)->first();
        // dd($image);
        $image->delete();
        deleteImages($id);

        return redirect()->back()->with('success', 'Image deleted successfully!');
}


    
public function deleteGalleryImage($id)
{
//    dd($id);
    $image = GalleryImage::where('image', $id)->first();
    // dd($image);
    $image->delete();
    deleteImages($id);

    return redirect()->back()->with('success', 'Image deleted successfully!');
}

}
