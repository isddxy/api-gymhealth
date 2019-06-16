<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Workout extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->created_at->diffForHumans(),
            'img' => $this->img,
            'user' => $this->user,
            // exercises
        ];
    }
}
