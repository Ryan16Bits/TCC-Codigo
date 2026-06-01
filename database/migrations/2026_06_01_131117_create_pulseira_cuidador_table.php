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
        Schema::create('pulseira_cuidador', function (Blueprint $table) {
            $table->id('idCuidador');
            $table->string('nome');
            $table->string('telefone');
            $table->enum('status', ['ativo', 'desativo', 'suspenso']);
            $table->timestamps();
            $table->foreignId('idPulseira')->constrained('create_pulseira_table')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulseira_cuidador');
    }
};
