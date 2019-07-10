<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTourContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tour_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('post_tour_id');
            $table->bigInteger('lang_id');
            $table->integer('status_id');
            $table->string('title');
            $table->text('description');
            $table->longText('content'); // wifi, lunch, ....
            $table->text('service'); // wifi, lunch, ....
            $table->text('term'); //shartlar
            $table->longText('activity'); // faoliyati
            $table->text('facility')->nullable(); //qulayliklar
            $table->string('insurance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tour_contents');
    }
}
