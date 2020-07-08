<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('post', function (Blueprint $table) {
        $table->increments('id_post');
        $table->string('content');
        $table->string('image');
        $table->boolean('public');
        $table->date('date');
        $table->integer('id')->unsigned();
        $table->foreign('id')->references('id')->on('users')->onDelete('RESTRICT');
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('post');
    }
}
