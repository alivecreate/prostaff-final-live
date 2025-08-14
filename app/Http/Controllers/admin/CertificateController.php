<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Team;
use App\Models\admin\Certificate;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $certificates = Certificate::all(); // Retrieve all Certificate from the database
        $page = [
            'name' => 'Certificate'
        ];
        return view('admin.pages.certificate.index', compact('page', 'certificates'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $page = [
            'name' => 'Certificate'
        ];
        return view('admin.pages.certificate.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $certificate = Certificate::orderBy('item_no', 'desc')->first();
        if(!$certificate){
            $item_no = 1;
        }else{
            $item_no = $certificate->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);

        Certificate::create([
            'item_no' => $item_no,
            'name' => $request->name,
            'image' => $image_name,
            'status' => $request->status,
        ]);
    

        return redirect()->route('certificate.create')->with('success', 'Certificate added successfully.');
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
            'name' => 'Certificate'
        ];

        $Certificate = Certificate::find($id);
        
        if($certificate){
            return view('admin.pages.certificate.edit', compact('page', 'team'));
        }else{
            return redirect(route('certificate.index'))->with('fail', 'Certificate Not Available...');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $Certificate = Certificate::findOrFail($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $certificate->image;
        }

        $certificate->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'status' => $request->status,
            'image' => $image_name,
        ]);
    
        return redirect()->route('certificate.edit', ['team' => $certificate->id])
            ->with('success', 'Certificate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $Certificate = Certificate::find($id);
        if (!$certificate) {
            return redirect()->route('certificate.index')->with('error', 'Certificate not found.');
        }

        $certificate->delete();
        deleteImages($certificate->image);
        return redirect()->route('certificate.index')->with('success', 'Certificate deleted successfully.');
    
    }
}
