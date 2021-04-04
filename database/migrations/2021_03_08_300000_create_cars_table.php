<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('plate_number');
            $table->string('picture');
            $table->unsignedBigInteger('model');
            $table->string('model_date');
            $table->unsignedDouble('price');
            $table->string('chassis_number');
            $table->string('automatique')->default(false);
            $table->string('statut');
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('agencies_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('colors_id');
            $table->unsignedBigInteger('locations_id');
            $table->unsignedBigInteger('reservations_id');
            $table->foreign('brands_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('colors_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('agencies_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('locations_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('reservations_id')->references('id')->on('reservations')->onDelete('cascade');


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
        Schema::dropIfExists('cars');
    }
}
