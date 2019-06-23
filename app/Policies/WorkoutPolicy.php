<?php

namespace App\Policies;

use App\User;
use App\Workout;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkoutPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function update(User $user, Workout $workout) {
        return $user->ownsWorkout($workout);
    }

    public function destroy(User $user, Workout $workout) {
        return $user->ownsWorkout($workout);
    }
}
