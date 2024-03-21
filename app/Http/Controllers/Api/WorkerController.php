<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Worker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $worker = Worker::create($request->all());

        return response()->json($worker, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $worker = Worker::find($id);

        return response()->json($worker);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Worker::where('id', $id)->exists()) {
            return response()->json(['message' => 'Worker not found'], 404);
        } else {
            $worker = Worker::find($id);
            $worker->update($request->all());

            return response()->json($worker);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Worker::where('id', $id)->exists()) {
            return response()->json(['message' => 'Worker not found'], 404);
        } else {
            Worker::destroy($id);

            return response()->json(['message' => 'Worker deleted']);
        }
    }
}
