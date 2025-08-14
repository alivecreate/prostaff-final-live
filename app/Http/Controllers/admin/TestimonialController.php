<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $testimonials = Testimonial::all(); // Retrieve all Testimonials from the database
        $page = [
            'name' => 'Testimonial'
        ];
        return view('admin.pages.testimonial.index', compact('page', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = [
            'name' => 'Testimonial'
        ];
        return view('admin.pages.testimonial.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = Testimonial::orderBy('item_no', 'desc')->first();
        if(!$testimonial){
            $item_no = 1;
        }else{
            $item_no = $testimonial->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);

        Testimonial::create([
            'item_no' => $item_no,
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image_name,
        ]);
    

        return redirect()->route('testimonial.create')->with('success', 'Testimonial added successfully.');
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
        $page = [
            'name' => 'Testimonial'
        ];

        $testimonial = Testimonial::find($id);
        
        if($testimonial){
            return view('admin.pages.testimonial.edit', compact('page', 'testimonial'));
        }else{
            return redirect(route('testimonials.index'))->with('fail', 'Testimonials Not Available...');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $testimonial = Testimonial::findOrFail($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $testimonial->image;
        }

        $testimonial->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image_name,
        ]);
    
        return redirect()->route('testimonial.edit', ['testimonial' => $testimonial->id])
            ->with('success', 'Testimonial updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $testimonial = Testimonial::find($id);
        if (!$testimonial) {
            return redirect()->route('testimonial.index')->with('error', 'testimonial not found.');
        }

        $testimonial->delete();
        deleteImages($testimonial->image);
        return redirect()->route('testimonial.index')->with('success', 'testimonial deleted successfully.');
    
    }
}
