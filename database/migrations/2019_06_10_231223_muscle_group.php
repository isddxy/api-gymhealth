<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MuscleGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('muscle_group', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('img')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      if (!Schema::hasTable('muscle_gropu_en') && !Schema::hasTable('muscle_gropu_ru')) {
        Schema::dropIfExists('muscle_group');
      }
    }
}
