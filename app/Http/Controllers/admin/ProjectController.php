<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Service;
use App\Models\admin\Category;
use App\Models\admin\ProjectImage;
use App\Models\admin\Project;
use Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Project::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages
        // $items = Project::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        // $items = Project::get();

        $items = Project::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Project'
        ];

        return view('admin.pages.project.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name', 'asc')->get();

        
        $page = [
            'name' => 'Project',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.project.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
        ]
    );
        

        $project = Project::latest()->first();
        if($project){
            $item_no =  $project->item_no + 1;
        }else{
            $item_no = 1;
        }

           
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = null;
        }

        $slug = Str::slug($request->customer_name);

        $project = Project::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'description' => $request->description, 
            'image' => $image_name, 
            'para1' => $request->para1, 
            'para2' => $request->para2, 
            'gallery' => $request->gallery,
            'slug' => $slug, 
            'status' => $request->status
        ]);
        
        $project->seo()->create([
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
                $project->images()->create([
                    'product_id' => $project->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            }   
    }

        return redirect()->route('project.create')->with('success', 'Project added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $categories = Category::orderBy('name', 'asc')->get();
        $page = [
            'name' => 'Project'
        ];
        $project = Project::with('seo')->find($id);
        // Check if the page is found
        if ($project) {
            return view('admin.pages.project.edit', compact('page', 'project', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('project.index')->with('error', 'Page not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $request->validate([
            // 'name' => 'required|string',
            // 'slug' => 'required|string',
        ]);
        
        // dd($request->all());
                
        $project = Project::find($id);
        
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $project->image;
        }

        if ($project) {
            
            $slug = Str::slug($request->customer_name);
            $project->update([
                'name' => $request->name,
                'customer_name' => $request->customer_name,
                'category_id' => $request->category_id, 
                'description' => $request->description, 
                'image' => $image_name, 
                'slug' => $slug, 
                'status' => $request->status
            ]);
            
            $project->seo()->updateOrCreate([], [
                'search_index' => $request->search_index, 
                'search_follow' => $request->search_follow, 
                'canonical_url' => $request->canonical_url, 
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword, 
                'meta_description' => $request->meta_description,
            ]);

            
        if($request->file('images') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $project->images()->create([
                    'project_id' => $project->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            } 
        } 

            return redirect()->route('project.index')
                ->with('success', 'project updated successfully');
            }
            else {
                return redirect()->back()->with('error', 'Project not found');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project_images = ProjectImage::where('project_id', $id)->get();
        
        // dd($project_images);

        $project = Project::find($id);
        if (!$project) {
            return redirect()->route('project.index')->with('error', 'Project not found.');
        }
        $project->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                               

        foreach($project_images as $project){
            deleteImages($project->image);
        }
        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    
    }


    
    public function deleteProjectImage($id)
    {
    //    dd($id);
        $image = ProjectImage::where('image', $id)->first();
        // dd($image);
        $image->delete();
        deleteImages($id);

        return redirect()->back()->with('success', 'Image deleted successfully!');
}
}
