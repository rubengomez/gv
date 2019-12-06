<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc');
            $table->string('address');
            $table->string('municipality');
            $table->string('state');
            $table->string('cp');
            $table->string('cellphone');
            $table->string('contact');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

          // Foreign Keys
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
