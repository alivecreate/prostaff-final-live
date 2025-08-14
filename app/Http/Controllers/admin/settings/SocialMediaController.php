<?php

namespace App\Http\Controllers\admin\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\SocialMedia;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMedia = SocialMedia::first();
        $page = [
            'name' => 'Social Media'
        ];
        return view('admin.pages.settings.social-media', compact('page', 'socialMedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $requestData =  [
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'vimeo' => $request->vimeo,
            'youtube_embed' => $request->youtube_embed,
            'linkedin' => $request->linkedin,
            'pinterest' => $request->pinterest,
            'skype' => $request->skype,
            'whatsapp' => $request->whatsapp,
            'whatsapp_group' => $request->whatsapp_group,
            'map_embed' => $request->map_embed,
            'facebook_embed' => $request->facebook_embed,
            
        ];

        $uniqueIdentifier = 1;

        $socialMedia = SocialMedia::find($uniqueIdentifier);

        if ($socialMedia) {
            $socialMedia->update($requestData);
        } 
        else {
            SocialMedia::create($requestData);
        }

        if ($socialMedia) {
            return redirect()->route('social-media.index')
                ->with('success', 'Social media data updated successfully');
        }
        else {
            return redirect()->route('social-media.index')->with('error', 'Something went wrong.');
        }
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
    public function destroy(string $id)
    {
        //
    }
}
