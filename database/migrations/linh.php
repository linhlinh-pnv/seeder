<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class linh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number');
            $table->string('note');
            $table->timestamps();



        });
        Schema::create('empployee',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number');
            $table->string('note');
            $table->timestamps();



        });
        Schema::create('Categories', function (Blueprint $table) {
            $table->increments('Id') ->nullable();
            $table->string('Name', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('customers');
    }
}
