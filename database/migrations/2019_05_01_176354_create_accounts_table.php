<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->string('company_name');
            $table->text('address');
            $table->text('description');
            $table->string('telephone');
            $table->string('emails'); // one more email
            $table->string('logo');
            $table->string('banner');
            $table->string('messenger');
            $table->dateTime('work_time_start')->nullable();
            $table->dateTime('work_time_end')->nullable();
            $table->integer('role_id')->default('1');
            $table->integer('status_id')->default('1');
            $table->timestamps();

        });
        Schema::table('accounts',function ($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
