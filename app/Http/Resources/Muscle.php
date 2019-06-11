<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MuscleGroup as MuscleGroupResource;

class Muscle extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'img' => $this->img,
            //'muscle_group' => MuscleGroupResource::collection($this->muscle_group_id),
            'muscle_group' => $this->muscle_group,
        ];
    }
}
