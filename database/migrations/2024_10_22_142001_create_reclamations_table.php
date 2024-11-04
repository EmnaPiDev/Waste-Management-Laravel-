<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id(); // ID de la réclamation
            $table->string('subject'); // Sujet de la réclamation
            $table->text('description'); // Description de la réclamation
         
            $table->unsignedBigInteger('centre_recyclage_id'); // Lien vers le centre de recyclage
            $table->string('status')->default('pending'); // Statut de la réclamation, valeur par défaut 'pending'
            $table->timestamps(); // Colonnes created_at et updated_at
       
           
            $table->foreign('centre_recyclage_id')->references('id')->on('centre_recyclages')->onDelete('cascade'); // Lien vers centre_recyclages
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
