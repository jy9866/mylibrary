<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();


        Schema::create('publishers', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('name', 150);
            $table->string('address', 150);
            $table->string('email', 50);
            $table->timestamps();
        });

        //insert
        /*DB::table('publishers')->insert(['name'=>'McGraw-Hill Education',
        'address'=>'Mcgraw Hill Education (India) Pvt Ltd Suite No 818, 8th Floor, The Estate, 121, Dickenson Road, Sivanchetti Gardens, Bengaluru, Karnataka 560001, Indi',
        'email'=>'Editorial.India@mheducation.com']);
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
