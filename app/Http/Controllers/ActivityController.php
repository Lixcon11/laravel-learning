<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();

        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('activities.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "user_id" => "required|exists:users,id",
            "type" => "required|in:surf,windsurf,kayak,atv,hot air balloon",
            "date" => "required|date",
            "paid" => "boolean",
            "notes" => "string|nullable",
            "satisfaction" => "integer|min:0|max:10|nullable"
        ]);

        $validated['paid'] = $request->has('paid') ? 1 : 0;

        dd($validated);

        Activity::create($validated);

        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*
    public function edit(string $id)
    {
        //
    }
    */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            "user_id" => "required|exists:users,id",
            "type" => "required|in:surf,windsurf,kayak,atv,hot air balloon",
            "date" => "required|date",
            "paid" => "required|boolean",
            "notes" => "string|nullable",
            "satisfaction" => "integer|min:0|max:10|nullable"
        ]);
    
        $activity = Activity::findOrFail($id);
    
        $activity->update($validated);
    
        return redirect()->route('activities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);

        $activity->delete();
    
        return redirect()->route('activities.index');
    }
}
