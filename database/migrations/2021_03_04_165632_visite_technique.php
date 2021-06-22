<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisiteTechnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visite_technique', function (Blueprint $table) {
            $table->id();
                       $table->string('centre');
           // $table->unsignedBigInteger('id_controle');
          //$table->bigInteger('n_autorisation');
            $table->dateTime('date_visite');
            $table->dateTime('date_fin');
            $table->bigInteger('prix');
           // $table->string('duree_mois');
           // $table->string('contact_center');
            $table->string('observation')->nullable();;
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visite_technique');
    }
}
