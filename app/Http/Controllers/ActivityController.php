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
        return "Hello World";
    }

    /**
     * Show the form for creating a new resource.
     */
    /*
    public function create()
    {
        //
    }
    */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "user_id" => "required|exists:users, id",
            "type" => "required|in:surf,windsurf,kayak,atv,hot air balloon",
            "date" => "required|date",
            "paid" => "required|boolean",
            "notes" => "string|nullable",
            "satisfaction" => "integer|min:0|max:10|nullable"
        ]);
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
