<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuscleRu extends Model
{
    protected $table = 'muscles_ru';

    public function muscle()
    {
        //return $this->hasOne(Muscle::class);
        return $this->hasOneThrough('App\Muscle')->using('App\MuscleRu');
    }
}
