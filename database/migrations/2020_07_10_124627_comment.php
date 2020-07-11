<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
        $table->increments('id_comment');
        $table->integer('id_user');
        $table->string('images');
        $table->string('content');
        $table->date('date');
        $table->integer('id_post')->unsigned();
        $table->integer('id_cha');
        $table->foreign('id_post')->references('id_post')->on('post')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
