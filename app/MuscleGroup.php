<?php

namespace App;

//use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class MuscleGroup extends Model
{
    
    protected $fillable = ['img'];
    protected $table = 'muscle_group';

    public function muscle() {
        return $this->hasMany(Muscle::class);
    }

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
