<?php

namespace App\Http\Controllers\admin\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\CustomCode;


class CustomCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customCode = CustomCode::first();
        $page = [
            'name' => 'Custom Code'
        ];
        return view('admin.pages.settings.custom-code', compact('page', 'customCode'));
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
            'js' => $request->js,
            'css' => $request->css,
        ];

        $uniqueIdentifier = 1;

        $customCode = CustomCode::find($uniqueIdentifier);

        if ($customCode) {
            $customCode->update($requestData);
        } 
        else {
            CustomCode::create($requestData);
        }

        if ($customCode) {
            return redirect()->route('custom-code.index')
                ->with('success', 'Custom Code updated successfully');
        }
        else {
            return redirect()->route('custom-code.index')->with('error', 'Something went wrong.');
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
