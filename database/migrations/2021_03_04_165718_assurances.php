<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assurances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
            Schema::create('assurances', function (Blueprint $table) {
                $table->id();
                $table->string('assurance');
               // $table->string('num_police');
                $table->dateTime('date_debut');
                $table->dateTime('date_fin');
              //  $table->integer('duree_mois');
                $table->integer('prix');
               //q $table->string('contact_assurance');
                $table->string('observation')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('created_at')->nullable();
               // $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assurances');
    }
}
