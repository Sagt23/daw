<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NFTS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nfts', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->Integer('base_price');
            $table->string('img');
            $table->string('token_id');
            $table->string('token_standar');
            $table->string('blockchain_type');
            $table->string('metadata');
            $table->Integer('likes');
            $table->Integer('id_category')->unsigned();
            $table->Integer('id_user')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_user')->references('id')->on('users');
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
        //
        Schema::dropIfExists('nfts');
    }
}
