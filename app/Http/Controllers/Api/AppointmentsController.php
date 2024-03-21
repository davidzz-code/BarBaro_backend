<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Appointment::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        return response()->json($appointment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::find($id);

        return response()->json($appointment);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Appointment::where('id', $id)->exists()) {
            return response()->json(['message' => 'Appointment not found'], 404);
        } else {
            $appointment = Appointment::find($id);
            $appointment->update($request->all());

            return response()->json($appointment);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Appointment::where('id', $id)->exists()) {
            return response()->json(['message' => 'Appointment not found'], 404);
        } else {
            $appointment = Appointment::find($id);
            $appointment->delete();

            return response()->json(['message' => 'Appointment deleted'], 202);
        }
    }
}
