<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->boolean('gender');
            $table->string('religion',30);
            $table->string('phone',11);
            $table->string('city');
            $table->string('district');
            $table->string('ward');
            $table->string('job');
            $table->string('habit');
            $table->string('intro');
            $table->string('findlove');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status');
            $table->boolean('role');
            $table->rememberToken();
            $table->timestamps();
            $table->string('img');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
