<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Orderable;

class Workout extends Model
{
    use Orderable;
    protected $fillable = ['name', 'description', 'img'];
    protected $table = 'workouts';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function exercise() {
        return $this->hasMany(Exercise::class);
    }
}
