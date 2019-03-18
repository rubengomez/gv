<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('series');
            $table->string('plate_number');
            $table->string('folio_circulation');
            $table->string('capacity');
            $table->integer('axes_id')->unsigned();
            $table->integer('engine_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            // Foreign Keys
            $table->foreign('axes_id')->references('id')->on('axes');
            $table->foreign('engine_id')->references('id')->on('engines');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
