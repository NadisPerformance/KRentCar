<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Achat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::create('achat', function (Blueprint $table) {
                $table->id();
               
                $table->unsignedBigInteger('users_id');
                $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
                $table->string('maison_achat');
                $table->bigInteger('prix');
                $table->bigInteger('avance_cache');
                $table->dateTime('date_achat');
               // $table->dateTime('date_premier_traite');
                $table->bigInteger('rest');
                $table->bigInteger('rest_mois');
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
        Schema::dropIfExists('achat');
    }
}
