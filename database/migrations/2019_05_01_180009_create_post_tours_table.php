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
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('title');
            $table->longText('description');
            $table->longText('service'); // wifi, lunch, ....
            $table->text('term');
            $table->string('rooms');
            $table->text('facility')->nullable();
            $table->longText('activity'); // faoliyati
            $table->float('cost');
            $table->string('discount')->nullable();
            $table->string('insurance')->nullable();
            $table->integer('status_id')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('region_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('post_tours',function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
