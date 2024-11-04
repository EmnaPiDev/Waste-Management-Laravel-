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
        Schema::create('plannings', function (Blueprint $table) {
            $table->id(); // Champ id automatique
            $table->date('dateCollecte'); // Colonne pour la date de collecte
            $table->time('heureDebut'); // Colonne pour l'heure de début
            $table->string('remarques')->nullable(); // Colonne pour les remarques
            $table->timestamps(); // Pour created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plannings');
    }
};
