<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\JsonApi\V1\Schedules\ScheduleCollectionQuery;
use App\Models\Schedule;
use Illuminate\Http\Request;
use LaravelJsonApi\Laravel\Http\Controllers\Actions;

class ScheduleController extends Controller
{

    use Actions\FetchMany;
    use Actions\FetchOne;
    use Actions\Store;
    use Actions\Update;
    use Actions\Destroy;
    use Actions\FetchRelated;
    use Actions\FetchRelationship;
    use Actions\UpdateRelationship;
    use Actions\AttachRelationship;
    use Actions\DetachRelationship;


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Schedule::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = Schedule::create($request->all());

        return response()->json($schedule, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schedule = Schedule::find($id);

        return response()->json($schedule);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Schedule::where('id', $id)->exists()) {
            return response()->json(['message' => 'Schedule not found'], 404);
        } else {
            $schedule = Schedule::find($id);
            $schedule->update($request->all());

            return response()->json($schedule);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Schedule::where('id', $id)->exists()) {
            return response()->json(['message' => 'Schedule not found'], 404);
        } else {
            $schedule = Schedule::find($id);
            $schedule->delete();

            return response()->json(['message' => 'Schedule deleted'], 202);
        }
    }
}
