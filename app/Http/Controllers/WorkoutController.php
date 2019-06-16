<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workout;
use App\Http\Requests\WorkoutRequest;
use App\Http\Resources\Workout as WorkoutpResource;

class WorkoutController extends Controller
{
    public function store(WorkoutRequest $request) {
        $workout = new Workout;
        $workout->name = $request->name;
        $workout->description = $request->description;
        $workout->img = $request->img;
        $workout->user()->associate($request->user());

        $workout->save();

        return new WorkoutpResource($workout);
    }
}
