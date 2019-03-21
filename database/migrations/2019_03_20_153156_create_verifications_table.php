<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_last_verification');
            $table->date('date_verification');
            $table->string('odometre');
            $table->string('verication_result');
            $table->string('cetificate_number');
            $table->integer('test_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->integer('tech_id')->unsigned();
            $table->integer('reject_id')->unsigned();
            $table->timestamps();

          // Foreign Keys
             $table->foreign('test_id')->references('id')->on('tests');
             $table->foreign('vehicle_id')->references('id')->on('vehicles');
             $table->foreign('tech_id')->references('id')->on('users');
             $table->foreign('reject_id')->references('id')->on('rejections');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifications');
    }
}
