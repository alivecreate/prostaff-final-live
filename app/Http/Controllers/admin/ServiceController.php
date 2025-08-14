<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Service;
use App\Models\admin\Category;
use App\Models\admin\ServiceImage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Service::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages
        // $items = Service::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        // $items = Service::get();

        $items = Service::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Service'
        ];

        return view('admin.pages.service.index', [
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
            'name' => 'Service',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.service.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'slider_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Generate item number
    $lastService = Service::latest()->first();
    $item_no = $lastService ? $lastService->item_no + 1 : 1;

            
    

    // // Handle main image upload
    $image_name = null;
    $slider_image = null;
    if ($request->hasFile('image')) {
        $image_name = uploadImageThumb($request); // your custom upload function
    }

    if ($request->hasFile('slider_image')) {
        $sliderImageName = uploadImageThumb($request, 'slider_image');
    }

    // // Handle slider_image upload
    // $sliderImageName = null;
    // if ($request->hasFile('slider_image')) {
    //     $file = $request->file('slider_image');
    //     $sliderImageName = time() . '_slider_' . uniqid() . '.' . $file->getClientOriginalExtension();

    //     $destinationPath = public_path('web/media/sm');
    //     if (!file_exists($destinationPath)) {
    //         mkdir($destinationPath, 0755, true); // Create the folder if not exists
    //     }
    //     $file->move($destinationPath, $sliderImageName);
    //     // $file->storeAs('public/web/media/sm/', $sliderImageName); // Save to storage/app/public/services
    // }

    // Create service
    $service = Service::create([
        'item_no' => $item_no,
        'name' => $request->name,
        'category_id' => $request->category_id,
        'description' => $request->description,
        'image' => $image_name,
        'slider_image' => $sliderImageName, // ✅ Save slider image name
        'para1' => $request->para1,
        'para2' => $request->para2,
        'gallery' => $request->gallery,
        'slug' => $request->slug,
        'status' => $request->status,
    ]);

    // Attach SEO
    $service->seo()->create([
        'search_index' => $request->search_index,
        'search_follow' => $request->search_follow,
        'canonical_url' => $request->canonical_url,
        'meta_title' => $request->meta_title,
        'meta_keyword' => $request->meta_keyword,
        'meta_description' => $request->meta_description,
        'seoable_id' => $service->id,
        'seoable_type' => Service::class,
    ]);

    // Upload and attach multiple gallery images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $galleryImageName = uploadImagesThumb($image); // your custom function
            $service->images()->create([
                'product_id' => $service->id,
                'image' => $galleryImageName,
                'image_title' => null,
            ]);
        }
    }

    return redirect()->route('service.create')->with('success', 'Service added successfully.');
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
            'name' => 'Service'
        ];
        $service = Service::with('seo')->find($id);
        // Check if the page is found
        if ($service) {
            return view('admin.pages.service.edit', compact('page', 'service', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('service.index')->with('error', 'Page not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $service = Service::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|integer|exists:categories,id',
        'slug' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'slider_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Handle main image upload
    $image_name = $service->image;
    if ($request->hasFile('image')) {
        $image_name = uploadImageThumb($request);

        // Optionally delete old image
        if ($service->image && \Storage::exists('public/services/' . $service->image)) {
            \Storage::delete('public/services/' . $service->image);
        }
    }

    // Handle slider image upload
    $sliderImageName = $service->slider_image;
    if ($request->hasFile('slider_image')) {
        $sliderImageName = uploadImageThumb($request, 'slider_image');

        // Optionally delete old slider image
        if ($service->slider_image && \Storage::exists('public/services/' . $service->slider_image)) {
            \Storage::delete('public/services/' . $service->slider_image);
        }
    }

    // Update service record
    $service->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'description' => $request->description,
        'image' => $image_name,
        'slider_image' => $sliderImageName,
        'slug' => $request->slug,
        'status' => $request->status,
        'para1' => $request->para1,
        'para2' => $request->para2,
        'gallery' => $request->gallery,
        'page_title' => $request->page_title,
    ]);

    // Update or create SEO metadata
    $service->seo()->updateOrCreate([], [
        'search_index' => $request->search_index,
        'search_follow' => $request->search_follow,
        'canonical_url' => $request->canonical_url,
        'meta_title' => $request->meta_title,
        'meta_keyword' => $request->meta_keyword,
        'meta_description' => $request->meta_description,
    ]);

    // Upload and attach new gallery images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $galleryImageName = uploadImagesThumb($image); // your custom helper
            $service->images()->create([
                'image' => $galleryImageName,
                'image_title' => null,
            ]);
        }
    }

    return redirect()->route('service.edit', $service->id)
        ->with('success', 'Service updated successfully');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service_images = ServiceImage::where('service_id', $id)->get();
        
        // dd($service_images);

        $service = Service::find($id);
        if (!$service) {
            return redirect()->route('service.index')->with('error', 'service not found.');
        }
        $service->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                               

        foreach($service_images as $service){
            deleteImages($service->image);
        }
        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    
    }


    
    public function deleteServiceImage($id)
    {
    //    dd($id);
        $image = ServiceImage::where('image', $id)->first();
        // dd($image);
        $image->delete();
        deleteImages($id);

        return redirect()->back()->with('success', 'Image deleted successfully!');
}
}
