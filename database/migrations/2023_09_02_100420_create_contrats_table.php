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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('locataire_id');
            $table->unsignedBigInteger('véhicule_id');
            $table->date('date_location');
            $table->date('date_retour');
            $table->decimal('prix_u', 10, 2);
            $table->decimal('montant_rest', 10, 2);
            $table->decimal('montant_avance', 10, 2);
            $table->decimal('montant_total', 10, 2);
            $table->string('statut');
            $table->timestamp('créé_le')->useCurrent();
            $table->timestamp('mis_à_jour_le')->useCurrent();
            $table->string('intermédiaire');
            $table->string('lieu_depart');
            $table->string('lieu_retour');
            $table->integer('km_depart');
            $table->integer('km_retour');
            $table->text('observation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
