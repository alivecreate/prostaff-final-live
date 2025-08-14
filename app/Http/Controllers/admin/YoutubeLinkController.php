<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\YoutubeLink;

class YoutubeLinkController extends Controller
{
public function index()
{
    $youtubeLinks = YoutubeLink::latest()->get(); // Fetch all YouTube links
    return view('admin.pages.youtubelink.index', compact('youtubeLinks'));
}


public function store(Request $request)
{
    $request->validate([
        'link' => 'required|url'
    ]);

    YoutubeLink::create([
        'title' => $request->title,
        'link' => $request->link
    ]);

    return redirect()->route('admin.youtube.index')->with('success', 'YouTube link added!');
}





public function update(Request $request, $id)
{
    $request->validate([
        'link' => 'required|url'
    ]);

    $link = YoutubeLink::findOrFail($id);
    $link->update([
        'title' => $request->title,
        'link' => $request->link
    ]);

    return redirect()->route('admin.youtube.index')->with('success', 'YouTube link updated!');
}




    // OPTIONAL: Remove if not needed
    public function create()
    {
        // Same logic as index; can be used if you route to `admin.youtube.create`
        $youtubeLink = YoutubeLink::first(); 
        return view('admin.pages.youtubelink.create', compact('youtubeLink'));
    }


    public function destroy($id)
    {
        $link = YoutubeLink::findOrFail($id);
        $link->delete();

        return redirect()->route('admin.youtube.index')->with('success', 'YouTube link deleted successfully!');
    }


    public function edit($id)
{
    $youtubeLink = YoutubeLink::findOrFail($id);
    return view('admin.pages.youtubelink.edit', compact('youtubeLink'));
}



}
