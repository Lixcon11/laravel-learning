<?php

namespace App\Http\Controllers;
use App\Enum\ActivityEnum;
use Illuminate\Validation\Rule;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return response()->json(["activities" => $activities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => ['required', 'numeric'],
            'type' => ['required', Rule::enum(ActivityEnum::class)],
            'datetime' => ['required','date'],
            'paid' => ['required', 'boolean'],
            'notes' => ['string'],
            'satisfaction' => ['required','numeric','min:1','max:10'],
            'timestamps' => ['required','date'],
        ]);

        $activity = new Activity;
 
        $activity->id = $request->id;
        $activity->type = $request->type;
        $activity->datetime = now();
        $activity->paid = $request->paid;
        $activity->notes = $request->notes;
        $activity->satisfaction = $request->satisfaction;
        $activity->timestamps = now();
 
        $activity->save();

        return response()->json(["activity" => $activity]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);

        return response()->json(["activity" => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'type ' => ['required', Rule::enum(ActivityEnum::class)],
            'datetime ' => ['required','date'],
            'paid ' => ['required', 'boolean'],
            'notes ' => ['string'],
            'satisfaction ' => ['required','numeric','min:1','max:10'],
            'timestamps ' => ['required','date'],
        ]);

        $activity = Activity::findOrFail($id);

        $activity->type = $request->has('type') ? $request->type : $activity->type;
        $activity->datetime = $request->has('datetime') ? $request->datetime : $activity->datetime;
        $activity->paid = $request->has('paid') ? $request->paid : $activity->paid;
        $activity->notes = $request->has('notes') ? $request->notes : $activity->notes;
        $activity->satisfaction = $request->has('satisfaction') ? $request->satisfaction : $activity->satisfaction;
        $activity->timestamps = $request->has('timestamps') ? $request->timestamps : $activity->timestamps;

        $activity->save();

        return response()->json(["activity" => $activity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Activity::destroy($id);

        return 'Activity with ID '.$id." deleted succesfully";
    }
}