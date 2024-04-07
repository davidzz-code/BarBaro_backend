<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\JsonApi\V1\Schedules\ScheduleRequest;
use Illuminate\Http\Request;
use App\Models\Schedule;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;

class ScheduleController extends Controller
{
    public function store(ScheduleRequest $request)
    {
        $data = $request->validated();
        dd($data);



        $schedule = new Schedule();
        $schedule->date = $data['date'];
        $schedule->manager_id = $data['relationships.manager.data.id']; // Asignamos el worker_id
        $schedule->save();


        return response()->json($schedule, 201);
    }

    // public function update(Request $request, Schedule $schedule)
    // {
    //     $data = $request->validate([
    //         'date' => 'required|date',
    //         'manager_id' => 'required|exists:workers,id',
    //     ]);

    //     $schedule->date = $data['date'];
    //     $schedule->worker_id = $data['manager_id']; // Asignamos el worker_id
    //     $schedule->save();

    //     return response()->json($schedule, 200);
    // }
}

