<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\ProductImage;

class ProductImageController extends Controller
{
    public function getImage($id)
    {
        
        $images = ProductImage::where('product_id',$id)->orderBy('id', 'desc')->get();
        if (!$images) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        return response()->json($images);
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $image_name = uploadImageThumb($request);
        // dd($image_name);
        // $image = $request->file('image');
    if ($request->file('image')) {
        
        $productImage = ProductImage::create([
            'product_id' => $request->product_id, 
            'image_title' => $request->image_title,
            'image' => $image_name,
            
        ]);
        // dd($productImage);
        
        $data = [
            'message' => 'New Image uploaded.',
            'data' => $productImage
        ];
        
        $status = 200;
        
        return response()->json($data, $status);
        
        }
        else {
            
            $data = [
                'message' => 'Image uploading failed.',
            ];
            
            $status = 405;
            return response()->json($data, $status);
            
        }


    }
    public function update(Request $request,  $id)
    {
       
        $productImage = ProductImage::where('id',$id)->first();

        if ($productImage) {
            $productImage->update([
                'image_title' => $request->image_title, 
            ]);
            
            $data = [
                'message' => 'Your message here',
            ];
            
            $status = 200;
            
            return response()->json($data, $status);
            
            }
            else {
                // return response()->json('message', 'Image data updation failed.');
            }
    }

    public function destroy(string $id)
    {
        $productImage = ProductImage::find($id);
        if (!$productImage) {
            $data = [
                'message' => 'Image data is not found.',
            ];
            $status = 404;
            return response()->json($data, $status);
        }

        $productImage->delete();
        deleteImages($productImage->image);
        $data = [
            'message' => 'Image Deleted Successfully.',
            'deletedImage' => $productImage
        ];
        $status = 200;
        return response()->json($data, $status);
    
    }
}
