<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
      Schema::create('blog', function (Blueprint $table) {
        $table->id();
        $table->string('title',100);
        $table->string('content');
        $table->string('descriptive');
        $table->string('img');
        $table->string('author',30);
        $table->date('datesubmitted');
        $table->integer('Id_category')->unsigned();
        $table->foreign('Id_category')->references('Id_category')->on('category_blog')->onDelete('RESTRICT');
        
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
