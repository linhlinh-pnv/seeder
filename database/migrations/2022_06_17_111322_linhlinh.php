<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Linhlinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choi',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number');
            $table->string('note');
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
    }
}
