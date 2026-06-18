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
        Schema::create('pulseira', function (Blueprint $table) {
            $table->id('idPulseira');
            $table->string('nomePulseira');
            $table->string('codigo');
            $table->enum('status', ['ativo', 'desativo', 'suspenso']);
            $table->enum('bateria', ['carregado', 'descarregando', 'descarregado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulseira');
    }
};
