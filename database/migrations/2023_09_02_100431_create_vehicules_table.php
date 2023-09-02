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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fournisseur');
            $table->string('marque');
            $table->string('modèle');
            $table->integer('année');
            $table->integer('kilométrage');
            $table->string('statut');
            $table->string('num_chassis');
            $table->string('carte_grise');
            $table->integer('puissance');
            $table->integer('nombre_cylindre');
            $table->string('type_carburant');
            $table->string('gamme');
            $table->string('categorie');
            $table->string('VIN');
            $table->timestamp('créé_le')->useCurrent();
            $table->timestamp('mis_à_jour_le')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
