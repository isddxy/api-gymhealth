<?php

namespace App;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use Orderable;
    protected $fillable = ['img'];
    protected $table = 'muscles';

    public function muscle_group() {
        return $this->belongsTo(MuscleGroup::class);
    }

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
