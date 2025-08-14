<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $page = [
            'name' => 'Slider'
        ];
        $slider = Slider::all(); // Retrieve all sliders from the database
        return view('admin.pages.slider.index', compact('page', 'slider'));
    }

    public function create()
    {        
        $page = [
            'name' => 'Slider'
        ];
        return view('admin.pages.slider.create', compact('page'));
    }

    public function store(Request $request)
    {
        
        $slider = Slider::orderBy('item_no', 'desc')->first();
        if(!$slider){
            $item_no = 1;
        }else{
            $item_no = $slider->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);

        Slider::create([
            'item_no' => $item_no,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'url' => $request->url,
            'image' => $image_name,
        ]);
    

        return redirect()->route('slider.create')->with('success', 'Slider added successfully.');

    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        



        $slider = Slider::find($id);

        
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $slider->image;
        }
        
        if ($slider) {
            
            $slider->update([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'url' => $request->url,
                'image' => $image_name,
                'status' => $request->status
            ]);
            

            return redirect()->route('slider.edit', ['slider' => $slider->id])
                ->with('success', 'Slider updated successfully');
            }
            else {
                return redirect()->route('slider.index')->with('error', 'Slider not found');
            }

    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (!$slider) {
            return redirect()->route('slider.index')->with('error', 'Slider not found.');
        }

        $slider->delete();
        deleteImages($slider->image);
        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    
    }
}
