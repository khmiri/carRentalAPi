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
        Schema::create('reglements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contrat_id');
            $table->decimal('montant', 8, 2);
            $table->decimal('montant_rest', 8, 2);
            $table->decimal('montant_facture', 8, 2);
            $table->string('mode_payment');
            $table->string('num_cheque')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('cree_le')->useCurrent();
            $table->date('date_echeance');
            $table->timestamps();

            $table->foreign('contrat_id')->references('id')->on('contrats')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reglements');
    }
};
