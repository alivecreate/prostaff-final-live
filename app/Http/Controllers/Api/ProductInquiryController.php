<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\ProductInquiry;
use App\Models\admin\ProductQuantity;

class ProductInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productInquiry = productQuantity::with(['product','productInquiry','product.image'])->where('product_inquiry_id', $id)->get();  
        return $productInquiry;   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        
        $inquiry = productInquiry::find($id);
        
        if ($inquiry) {
            $inquiry->status = $request->status; 
            $inquiry->save();

            return response()->json(['message' => 'Status updated successfully']);
        } else {
            return response()->json(['message' => 'Inquiry not found'], 404);
        }
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $inquiry = productInquiry::find($id);

        if (!$inquiry) {
            return redirect()->route('inquiry.index')->with('error', 'Inquiry not found.');
        }
        
        $delete = $inquiry->delete();
        if($delete){
            return redirect()->route('inquiry.index')->with('success', 'Inquiry deleted successfully.');
            
            // return redirect()->route('blog.edit', ['blog' => $blog->id])->with('success', 'Blog updated successfully');
        }
        return redirect()->route('inquiry.index')->with('fail', 'Something went wrong. Please try again.');
    }
}
