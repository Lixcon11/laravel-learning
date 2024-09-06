<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Listado de actividades';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Formulario para crear una nueva actividad';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Almacenando nueva actividad';
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return 'Mostrando actividad: ' . $activity->id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return 'Formulario para editar actividad: ' . $activity->id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        return 'Actualizando actividad: ' . $activity->id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        return 'Eliminando actividad: ' . $activity->id;
    }
}