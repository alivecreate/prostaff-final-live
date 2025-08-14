<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $clients = Client::all(); // Retrieve all Client from the database
        $page = [
            'name' => 'Client'
        ];
        return view('admin.pages.client.index', compact('page', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $page = [
            'name' => 'Client'
        ];
        return view('admin.pages.client.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $client = Client::orderBy('item_no', 'desc')->first();
        if(!$client){
            $item_no = 1;
        }else{
            $item_no = $client->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);
        // dd($image_name);

        Client::create([
            'item_no' => $item_no,
            'name' => $request->name,
            'image' => $image_name,
            'status' => $request->status,
        ]);
    

        return redirect()->route('client.create')->with('success', 'Client added successfully.');
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
            'name' => 'Client'
        ];

        $client = Client::find($id);
        
        if($client){
            return view('admin.pages.client.edit', compact('page', 'client'));
        }else{
            return redirect(route('client.index'))->with('fail', 'Client Not Available...');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $client = Client::findOrFail($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $client->image;
        }

        $client->update([
            'name' => $request->name,
            'image' => $image_name,
            'status' => $request->status,
        ]);
    
        return redirect()->route('client.edit', ['client' => $client->id])
            ->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $client = Client::find($id);
        if (!$client) {
            return redirect()->route('client.index')->with('error', 'Client not found.');
        }

        $client->delete();
        deleteImages($client->image);
        return redirect()->route('client.index')->with('success', 'Client deleted successfully.');
    
    }
}
