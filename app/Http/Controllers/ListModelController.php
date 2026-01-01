<?php


namespace App\Http\Controllers;


use App\Models\ListModel;
use App\Models\Resource;
use Illuminate\Http\Request;
use Auth;


class ListModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $lists = auth()->user()->lists;
    return view('list.index', compact('lists'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resources = Resource::orderBy('title')->get();


        return view('list.create', compact('resources'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
    'name' => 'required|string|max:255',
    'description' => 'required|string',
    'resources' => 'nullable|array',
    'resources.*' => 'exists:resources,id',
    'personal_notes' => 'nullable|array',
]);




        $list = ListModel::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'user_id' => Auth::user()->id,
        ]);


        if (!empty($validated['resources'])) {
        foreach ($validated['resources'] as $index => $resourceId) {
            $list->resources()->attach($resourceId, [
                'position' => $index + 1,
                'personal_note' => $request->personal_notes[$resourceId] ?? '',
                'tag_id' => null // just leave it null
            ]);
        }
    }




        return redirect()->route('list.index')
            ->with('success', 'List created successfully.');


    }


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $list = auth()->user()
        ->lists()
        ->with('resources')
        ->findOrFail($id);

    return view('list.show', compact('list'));
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $list = auth()->user()->lists()->findOrFail($id);
    $resources = Resource::orderBy('title')->get();

    return view('list.edit', compact('list', 'resources'));
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $list = ListModel::findOrFail($id);

    // Validate input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'resources' => 'nullable|array',
        'resources.*' => 'exists:resources,id',
        'personal_notes' => 'nullable|array',
        'personal_notes.*' => 'nullable|string',
    ]);

    // Update list name and description
    $list->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
    ]);

    // Prepare data for sync with pivot table
    $syncData = [];
    if (!empty($validated['resources'])) {
        foreach ($validated['resources'] as $resourceId) {
            $syncData[$resourceId] = [
                'personal_note' => $validated['personal_notes'][$resourceId] ?? null
            ];
        }
    }

    // Sync resources with personal notes
    $list->resources()->sync($syncData);

    return redirect()->route('list.show', $list->id)
                     ->with('success', 'List updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $list = auth()->user()->lists()->findOrFail($id);
    $list->delete();

    return redirect()->route('list.index');
}


}