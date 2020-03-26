<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::enableForeignKeyConstraints();

         Schema::create('books', function (Blueprint $table) {
             $table->engine='InnoDB';
             $table->increments('id');
             $table->binary('image')->nullable();
             $table->string('title', 150);
             $table->string('category', 100);
             $table->string('status', 20);
             $table->unsignedInteger('author_id')->nullable();
             $table->unsignedInteger('publisher_id')->nullable();

             $table->foreign('author_id')
                   ->references('id')->on('authors');
             $table->foreign('publisher_id')
                   ->references('id')->on('publishers');
             $table->timestamps();
         });


    public function down()
    {
        Schema::dropIfExists('books');
    }
}
