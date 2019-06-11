<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MusclesEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('muscles')) {
        Schema::create('muscles_en', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();;
          $table->foreign('id')->references('id')->on('muscles')->onDelete('cascade');
          $table->string('name')->unique();
          $table->text('description');
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

      Schema::table('muscles_en', function($table)
      {
        $table->dropForeign(['id']);
        // $table->foreign('id')
        //       ->references('id')->on('muscles')
        //       ->onDelete('cascade');
        $table->dropColumn('id');
      });
      Schema::dropIfExists('muscles_en');
    }
}
