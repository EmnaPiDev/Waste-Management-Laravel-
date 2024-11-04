<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id(); 
            $table->string('titre'); 
            $table->text('contenu'); 
            $table->date('date_rapport'); 
            $table->unsignedBigInteger('collecte_evenement_id'); 
            $table->timestamps();

            
            $table->foreign('collecte_evenement_id')->references('id')->on('collecte_evenements')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}