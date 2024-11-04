<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('equipement_planning', function (Blueprint $table) {
        $table->id();
        $table->foreignId('planning_id')->constrained('plannings')->onDelete('cascade');
        $table->foreignId('equipement_id')->constrained('equipements')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_planning');
    }
};
