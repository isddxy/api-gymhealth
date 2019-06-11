<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Muscles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('users')) {
        Schema::create('muscles', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('img')->unique();
          $table->unsignedBigInteger('muscle_group_id');
          $table->foreign('muscle_group_id')->references('id')->on('muscle_group')->onDelete('cascade');
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
      if (!Schema::hasTable('muscle_group') && !Schema::hasTable('muscles_en') && !Schema::hasTable('muscles_ru')) {
        Schema::table('muscles', function($table)
        {
          $table->dropForeign(['muscle_group_id']);
          // $table->foreign('muscle_group_id')
          //       ->references('id')->on('muscle_group')
          //       ->onDelete('cascade');
          $table->dropColumn('muscle_group_id');
        });
        Schema::dropIfExists('muscles');
      }
    }
}
