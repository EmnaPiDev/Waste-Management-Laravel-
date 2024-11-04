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
        Schema::create('centre_recyclages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nom
            $table->string('address'); // adresse
            $table->string('city')->nullable(); // Ajout de la colonne ville
            $table->string('material_type'); // type_materiaux
            $table->integer('capacity'); // capacité
            $table->integer('number_of_employees'); // nombre d'employés
            $table->string('contact_number')->nullable(); // Numéro de contact
            $table->string('email')->nullable();          // E-mail
            $table->string('website')->nullable();        // Site web
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centre_recyclages');
    }
};