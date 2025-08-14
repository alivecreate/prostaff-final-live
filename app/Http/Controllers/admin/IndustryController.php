<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Industry;
use App\Models\admin\Category;
use App\Models\admin\IndustryImage;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Industry::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages
        // $items = Industry::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        // $items = Industry::get();

        $items = Industry::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Industry'
        ];

        return view('admin.pages.industry.index', [
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
            'name' => 'Industry',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.industry.create', compact('page', 'categories'));
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
        

        $item_no = Industry::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }

           
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $industry->image;
        }


        $industry = Industry::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'description' => $request->description, 
            'image' => $image_name, 
            'gallery' => $request->gallery,
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $industry->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);


        if($request->file('images') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $industry->images()->create([
                    'industry_id' => $industry->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            }   
    }

        return redirect()->route('industry.create')->with('success', 'Industry added successfully.');
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
            'name' => 'Industry'
        ];
        $industry = Industry::with('seo')->find($id);
        // Check if the page is found
        if ($industry) {
            return view('admin.pages.industry.edit', compact('page', 'industry', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('industry.index')->with('error', 'Page not found');
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
                
        $industry = Industry::find($id);
        
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $industry->image;
        }

        if ($industry) {
            
            $industry->update([
                'name' => $request->name,
                'category_id' => $request->category_id, 
                'description' => $request->description, 
                'image' => $image_name, 
                'slug' => $request->slug, 
                'status' => $request->status
            ]);
            
            $industry->seo()->updateOrCreate([], [
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
                $industry->images()->create([
                    'industry_id' => $industry->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            } 
        } 

            return redirect()->route('industry.edit', ['industry' => $industry->id])
                ->with('success', 'Industry updated successfully');
            }
            else {
                return redirect()->back()->with('error', 'Industry not found');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $industry_images = IndustryImage::where('Industry_id', $id)->get();
        
        // dd($industry_images);

        $industry = Industry::find($id);
        if (!$industry) {
            return redirect()->route('industry.index')->with('error', 'Industry not found.');
        }
        $industry->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                               

        foreach($industry_images as $industry){
            deleteImages($industry->image);
        }
        return redirect()->route('industry.index')->with('success', 'Industry deleted successfully.');
    
    }


    
    public function industryImage($id)
    {
    //    dd($id);
        $image = IndustryImage::where('image', $id)->first();
        // dd($image);
        $image->delete();
        deleteImages($id);

        return redirect()->back()->with('success', 'Image deleted successfully!');
}


    
public function deleteIndustryImage($id)
{
//    dd($id);
    $image = IndustryImage::where('image', $id)->first();
    // dd($image);
    $image->delete();
    deleteImages($id);

    return redirect()->back()->with('success', 'Image deleted successfully!');
}

}
