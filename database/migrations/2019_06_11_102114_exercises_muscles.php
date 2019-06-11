<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExercisesMuscles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('exercises_muscles', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
        $table->unsignedBigInteger('exercise_id');
        $table->unsignedBigInteger('muscle_id');
        $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
        $table->foreign('muscle_id')->references('id')->on('exercises')->onDelete('cascade');
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
