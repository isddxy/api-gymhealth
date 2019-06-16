<?php

namespace App;

//use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Muscle extends Model
{
    //use Orderable;
    protected $fillable = ['img', 'name'];
    protected $table = 'muscles';


    public function muscle_group() {
        return $this->belongsTo(MuscleGroup::class);
    }

    public function name($id) {
        return DB::table('muscles_'.app()->getLocale())->where('id', $id)->value('name','description');
    }

    public function description($id) {
        return DB::table('muscles_'.app()->getLocale())->where('id', $id)->value('description');
    }

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
