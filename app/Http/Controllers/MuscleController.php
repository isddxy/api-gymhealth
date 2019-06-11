<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muscle;
use App\MuscleGroup;
use App\Http\Resources\Muscle as MuscleResource;

class MuscleController extends Controller
{
    public function index() {
        $muscles = Muscle::all();
        return MuscleResource::collection($muscles);
    }

    public function store(Request $request) {
        $muscle = new Muscle;
        $muscle->img = $request->img;
        $muscle->muscle_group()->associate($request->muscle_group());

        $muscle_group = new MuscleGroup;
        $muscle->img = $request->img;

        return new MuscleResource($muscle);
    }
}
