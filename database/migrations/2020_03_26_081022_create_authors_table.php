<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('authors');
        Schema::create('authors', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('name', 150);
            $table->timestamps();
        });

    }
    //Insert
    //  DB::table('authors')->insert(['name'=>'Majid Husain']);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
