<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkoutsExercises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('workouts_exercises', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->unsignedBigInteger('workout_id');
        $table->unsignedBigInteger('exercise_id');
        $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
        $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('exercises_muscles');
    }
}
