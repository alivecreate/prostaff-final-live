<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Team;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $teams = Team::all(); // Retrieve all Team from the database
        $page = [
            'name' => 'Team'
        ];
        return view('admin.pages.team.index', compact('page', 'teams'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $page = [
            'name' => 'Team'
        ];
        return view('admin.pages.team.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $team = Team::orderBy('item_no', 'desc')->first();
        if(!$team){
            $item_no = 1;
        }else{
            $item_no = $team->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);

        Team::create([
            'item_no' => $item_no,
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $image_name,
            'status' => $request->status,
        ]);
    

        return redirect()->route('team.create')->with('success', 'Team added successfully.');
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
            'name' => 'Team'
        ];

        $team = Team::find($id);
        
        if($team){
            return view('admin.pages.team.edit', compact('page', 'team'));
        }else{
            return redirect(route('team.index'))->with('fail', 'Team Not Available...');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $team = Team::findOrFail($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $team->image;
        }

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'status' => $request->status,
            'image' => $image_name,
        ]);
    
        return redirect()->route('team.edit', ['team' => $team->id])
            ->with('success', 'Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $team = Team::find($id);
        if (!$team) {
            return redirect()->route('team.index')->with('error', 'Team not found.');
        }

        $team->delete();
        deleteImages($team->image);
        return redirect()->route('team.index')->with('success', 'Team deleted successfully.');
    
    }
}
