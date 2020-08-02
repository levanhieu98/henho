<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('albums', function (Blueprint $table) {
        
        $table->increments('id_album');
        $table->string('name_album');
        $table->date('dateCreated');
        $table->string('description');
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
       Schema::dropIfExists('albums');
   }
}
