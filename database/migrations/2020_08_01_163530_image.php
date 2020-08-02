<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Image extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('images', function (Blueprint $table) {
          
          $table->increments('id_image');
          $table->string('name_image');
          $table->integer('id_album')->unsigned();
          $table->foreign('id_album')->references('id_album')->on('albums')->onDelete('RESTRICT');
      });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('images');
   }
}
