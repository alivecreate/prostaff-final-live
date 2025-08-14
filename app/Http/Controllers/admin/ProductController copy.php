<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\ProductImage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('images')->latest()->get();

        $page = [
            'name' => 'Product'
        ];
        return view('admin.pages.product.index', compact('page', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('test');
        $categories = Category::orderBy('name', 'asc')->get();

        
        $page = [
            'name' => 'Product',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.product.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
    Storage::deleteDirectory('public/temp_images');
    
    $images = $request->file('images');

    if ($request->hasFile('images')) {
        
        $imagePaths = [];

        foreach ($images as $image) {
            // Move the image to a temporary storage location
            $tempPath = $image->store('temp_images', 'public');
            $imagePaths[] = $tempPath;
        }
        $images = $request->file('images');
        $request->session()->flash('uploaded_image', $imagePaths);
    }

        
        $validation = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|string',
            'price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            // 'price' => 'required',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048'
        ],
        [
            'category_id.required' => 'The category is required.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'price.regex' => 'The price must have up to two decimal places.',
        ]

    );
    if($validation){
        dd('errr');
    }else{
        dd('no err');

    }


        $item_no = Product::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }


        $product = Product::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'category_id' => $request->category_id, 
            'description' => $request->description, 
 
            'image_title' => $request->image_title, 
            'page_title' => $request->page_title, 
            'price' => $request->price, 
            'discounted_price' => $request->discounted_price, 
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $product->seo()->create([
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
                $product->images()->create([
                    'product_id' => $product->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            }   
    }

        return redirect()->route('product.create')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){

        $product_images = ProductImage::where('product_id', $id)->get();
        
        // dd($product_images);

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'product not found.');
        }
        $product->delete();

        foreach($product_images as $product){
            deleteImages($product->image);
        }
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
