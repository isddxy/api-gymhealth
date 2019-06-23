<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workout;
use App\Http\Requests\WorkoutRequest;
use App\Http\Requests\UpdateWorkoutRequest;
use App\Http\Resources\Workout as WorkoutResource;

class WorkoutController extends Controller
{
    public function index() {
        $workouts = Workout::all();
        return WorkoutResource::collection($workouts);
    }

    public function show(Workout $workout) {
        return new WorkoutResource($workout);
    }

    public function store(WorkoutRequest $request) {
        $workout = new Workout;
        $workout->name = $request->name;
        $workout->description = $request->description;
        $workout->img = $request->img;
        $workout->user()->associate($request->user());

        $workout->save();

        return new WorkoutResource($workout);
    }

    public function update(UpdateWorkoutRequest $request, Workout $workout) {
        $this->authorize('update', $workout);
        $workout->name = $request->get('name', $workout->name);
        $workout->description = $request->get('description', $workout->description);
        $workout->img = $request->get('img', $workout->img);
        $workout->save();

        return new WorkoutResource($workout);
    }

    public function destroy(Workout $workout) {
        $this->authorize('destroy', $workout);
        $workout->delete();
        return response(null, 204);
    }

    public function getWorkoutUser(Request $request) {
        // $workout = new Workout;
        // $workout->user()->associate($request->user());
        // $user_id = $workout->user->id;
        $workouts = Workout::where('user_id',$request->id)->get();
        return WorkoutResource::collection($workouts);
    }
}
