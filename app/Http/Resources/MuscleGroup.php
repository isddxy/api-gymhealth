<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MuscleGroup extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'img' => $this->img,
        ];
    }
}
