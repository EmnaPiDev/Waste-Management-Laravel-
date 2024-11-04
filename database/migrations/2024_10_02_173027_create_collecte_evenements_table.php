<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollecteEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecte_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('statut');
            $table->date('date_collecte');
            $table->text('description')->nullable(); 
            $table->text('lieu')->nullable();
          
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
        Schema::dropIfExists('collecte_evenements');
    }
}
