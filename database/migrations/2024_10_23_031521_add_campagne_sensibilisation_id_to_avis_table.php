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
        Schema::table('avis', function (Blueprint $table) {
            // Vérifie si la colonne 'campagne_sensibilisation_id' existe avant d'ajouter
            if (!Schema::hasColumn('avis', 'campagne_sensibilisation_id')) {
                $table->foreignId('campagne_sensibilisation_id')
                      ->constrained('campagne_sensibilisations')
                      ->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('avis', function (Blueprint $table) {
            // Supprime la colonne si elle existe
            if (Schema::hasColumn('avis', 'campagne_sensibilisation_id')) {
                $table->dropForeign(['campagne_sensibilisation_id']);
                $table->dropColumn('campagne_sensibilisation_id');
            }
        });
    }
};
