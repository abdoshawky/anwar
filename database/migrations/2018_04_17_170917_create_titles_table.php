<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('titles', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('category_id')->unsigned();
//            $table->foreign('category_id')->references('id')->on('categories');
//            $table->string('name');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('titles');
    }
}
