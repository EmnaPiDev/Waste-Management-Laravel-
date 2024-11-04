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
        Schema::create('dechets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('description')->nullable();
            // Utilisez uniquement la clé étrangère sans redéfinir le champ
            $table->foreignId('zone_collecte_id')->constrained('zone_collectes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dechets');
    }
};
