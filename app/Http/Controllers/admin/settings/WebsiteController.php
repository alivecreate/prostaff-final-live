<?php

namespace App\Http\Controllers\admin\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $website = Website::first();
        $page = [
            'name' => 'Website'
        ];
        return view('admin.pages.settings.website.index', compact('page', 'website'));
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
        // dd($request->all());
        if($request->file('main_logo')){
            $main_logo = uploadImageThumb($request, 'main_logo');
        }
        else{
            $main_logo = $request->old_main_logo;
        }

        // dd($request->all());
        if($request->file('light_logo')){
            $light_logo = uploadImageThumb($request, 'light_logo');
        }
        else{
            $light_logo = $request->old_light_logo;
        }

        // dd($request->all());
        if($request->file('favicon')){
            $favicon = uploadImageThumb($request, 'favicon');
        }
        else{
            $favicon = $request->old_favicon;
        }

        $requestData =  [
            'website_name'=> $request->website_name,
            'tagline'=> $request->tagline,
            'domain_name'=> $request->domain_name,
            'description'=> $request->description,
            'primary_mail'=> $request->primary_mail,
            'secondary_mail'=> $request->secondary_mail,
            'primary_phone'=> $request->primary_phone,
            'secondary_phone'=> $request->secondary_phone,
            'address'=> $request->address,
            'main_logo'=> $main_logo,
            'light_logo'=> $light_logo,
            'favicon'=> $favicon
        ];

        $uniqueIdentifier = 1;

        $website = Website::find($uniqueIdentifier);

        if ($website) {
            $website->update($requestData);
        } 
        else {
            Website::create($requestData);
        }

        if ($website) {
            return redirect()->route('website.index')
                ->with('success', 'Website data updated successfully');
            }
            else {
                return redirect()->route('website.index')->with('error', 'Something went wrong.');
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
        // dd($request->all());
        if($request->file('main_logo')){
            $main_logo = uploadImageThumb($request);
        }
        else{
            $main_logo = $request->main_logo;
        }

        // dd($request->all());
        if($request->file('light_logo')){
            $main_logo = uploadImageThumb($request);
        }
        else{
            $main_logo = $request->main_logo;
        }

        // dd($request->all());
        if($request->file('favicon_logo')){
            $main_logo = uploadImageThumb($request);
        }
        else{
            $main_logo = $request->main_logo;
        }


        $websiteUpdate = Website::updateOrCreate(
            [
                'website_name'=> $request->website_name,
                'tagline'=> $request->tagline,
                'domain_name'=> $request->domain_name,
                'description'=> $request->description,
                'primary_mail'=> $request->primary_mail,
                'secondary_mail'=> $request->secondary_mail,
                'primary_phone'=> $request->primary_phone,
                'secondary_phone'=> $request->secondary_phone,
                'address'=> $request->address,
                'main_logo'=> $request->main_logo,
                'light_logo'=> $request->light_logo,
                'favicon'=> $request->favicon
            ],
                
        );

        if ($websiteUpdate) {
            

            return redirect()->route('webiste.index')
                ->with('success', 'Website data updated successfully');
            }
            else {
                return redirect()->route('webiste.index')->with('error', 'Something went wrong.');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
