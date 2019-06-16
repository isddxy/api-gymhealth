<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MuscleGroup extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name($this->id),
            'img' => $this->img,
            //'name' => MuscleGroup::getName('ru', 1);
        ];
    }
}
