<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MuscleGroupRu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('muscle_group')) {
        Schema::create('muscle_group_ru', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();;
          $table->foreign('id')->references('id')->on('muscle_group')->onDelete('cascade');
          $table->string('name')->unique();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('muscle_group_ru', function($table)
      {
        $table->dropForeign(['id']);
        // $table->foreign('id')
        //       ->references('id')->on('muscle_group')
        //       ->onDelete('cascade');
        $table->dropColumn('id');
      });
      Schema::dropIfExists('muscle_group_ru');
    }
}
