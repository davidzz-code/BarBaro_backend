<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Service::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = Service::create($request->all());

        return response()->json($service, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);

        return response()->json($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Service::where('id', $id)->exists()) {
            return response()->json(['message' => 'Service not found'], 404);
        } else {
            $service = Service::find($id);
            $service->update($request->all());

            return response()->json($service);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Service::where('id', $id)->exists()) {
            return response()->json(['message' => 'Service not found'], 404);
        } else {
            $service = Service::find($id);
            $service->delete();

            return response()->json(['message' => 'Service deleted']);
        }
    }
}
