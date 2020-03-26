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
            $table->unsignedInteger('authorName')->nullable();
            $table->unsignedInteger('publisherName')->nullable();

            $table->foreign('authorName')
                  ->references('name')->on('authors');
            $table->foreign('publisherName')
                  ->references('name')->on('publishers');
            $table->timestamps();
        });

        Schema::dropIfExists('books');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
