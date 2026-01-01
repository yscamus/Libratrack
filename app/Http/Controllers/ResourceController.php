<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // reserve for index page of the entity
        $resources = Resource::get();


        //returns values of the variable
        // dd($resources);

        // In resource.index, resource is the folder and index is the view file (Camus-Y\resources\views\resource\index.blade.php)
        return view('resource.index', compact('resources'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [ 
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'subject' => $request->input('subject'),
            'format' => $request->input('format'),
            'published_year' => $request->input('published_year')
        ];

        Resource::firstOrCreate($data);

        return redirect()->route('resource.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
      //  dd($resource);
        return view('resource.show', compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        // dd($resource);
        return view('resource.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        // dd('updated record);
        $data = [ 
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'subject' => $request->input('subject'),
            'format' => $request->input('format'),
            'published_year' => $request->input('published_year')
        ];

        $resource->update($data);

        return redirect()->route('resource.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        // dd('deleted record');
        $resource->delete();
        return redirect()->route('resource.index');
    }
}
