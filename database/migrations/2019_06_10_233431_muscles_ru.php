<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MusclesRu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (Schema::hasTable('muscles')) {
        Schema::create('muscles_ru', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
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
      Schema::table('muscles_ru', function($table)
      {
        $table->dropForeign(['id']);
        $table->dropColumn('id');
      });
      Schema::dropIfExists('muscles_ru');
    }
}
