<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('price');
            $table->integer('price_type_id');
            $table->integer('sale')->nullable();
            $table->integer('rooms');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('region_id')->unsigned();
            $table->integer('status_id');
            $table->timestamps();
        });

        Schema::table('post_tours',function (Blueprint $table){
            $table->foreign('category_id')->references('id')->on('tour_categories')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tours');
    }
}
