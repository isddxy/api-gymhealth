<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExercisesEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('exercises_en', function (Blueprint $table) {
        $table->bigIncrements('id')->unsigned();;
        $table->foreign('id')->references('id')->on('exercises')->onDelete('cascade');
        $table->string('name')->unique();
        $table->text('description');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('exercises_en');
    }
}
