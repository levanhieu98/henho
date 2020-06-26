<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('profile', function (Blueprint $table) {
            $table->increments('Id_profile');
            $table->string('job');
            $table->string('religion');
            $table->string('habit');
            $table->string('phone',11);
            $table->string('intro');
            $table->string('findlove');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('RESTRICT');
            $table->rememberToken();
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
         Schema::dropIfExists('profile');
    }
}
