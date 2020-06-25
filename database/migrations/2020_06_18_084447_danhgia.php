<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Danhgia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('review', function (Blueprint $table) {
            $table->increments('Id_review');
            $table->string('name', 30);
            $table->dateTime('date');
            $table->text('content');
            $table->boolean('status');
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
          Schema::dropIfExists('review');
    }
}
