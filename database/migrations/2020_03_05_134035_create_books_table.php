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
        Schema::create('books', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->binary('image')->nullable();
            $table->string('title', 150);
            $table->string('category', 100);
            $table->string('status', 20);
            $table->foreign(’author_name’)
                  ->references(’name’)->on(’authors’);
            $table->foreign(’publisher_name’)
                  ->references(’name’)->on(’publishers’);
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
        Schema::dropIfExists('books');
    }
}
