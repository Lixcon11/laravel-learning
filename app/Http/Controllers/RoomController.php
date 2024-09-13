<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roomNumber' => 'required|string|max:255',
            'description' => 'required|string',
            'roomType' => 'required|in:Single Bed,Double Bed,Double Superior,Suite',
            'amenities' => 'nullable|array',
            'amenities.*' => 'string|in:AC,Breakfast,Cleaning,Grocery,Shop near,Wifi,Kitchen,Shower,Single Bed,Towels',
            'price' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0',
        ]);

        Room::create($validated);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::findOrFail($id);

        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::findOrFail($id);

        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'roomNumber' => 'required|string|max:255',
            'description' => 'required|string',
            'roomType' => 'required|in:Single Bed,Double Bed,Double Superior,Suite',
            'amenities' => 'nullable|array',
            'amenities.*' => 'string|in:AC,Breakfast,Cleaning,Grocery,Shop near,Wifi,Kitchen,Shower,Single Bed,Towels',
            'price' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0',
        ]);

        $room = Room::findOrFail($id);

        $room->update($validated);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);

        $room->delete();
        
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
