<?php

namespace App;

//use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MuscleGroup extends Model
{

    protected $fillable = [
        'name',
    ];

    protected $table = 'muscle_group';

    public function muscle()
    {
        return $this->hasMany(Muscle::class);
    }

    public function name($id)
    {
        return $this->getName($id);
    }


    static function getName($id)
    {
        $locale = app()->getLocale();
        return $name = DB::table('muscle_group_'.$locale)->where('id', $id)->value('name');
    }

    // public function name() {
    //     return $this->belongsTo(MuscleGroupRu::class);
    // }
}
