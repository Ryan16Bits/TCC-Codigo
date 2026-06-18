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
        Schema::create('quedas_detectadas', function (Blueprint $table) {
            $table->id('idQueda');
            $table->unsignedBigInteger('idDispositivo');
            $table->unsignedBigInteger('idLeitura');
            $table->float('magnitudeAcel', precision: 53);
            $table->float('confianca', precision: 53);
            $table->enum('status', ['pendente', 'confirmada', 'falso_positivo']);
            $table->string('observacao');
            $table->timestamp('detectadoEm', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quedas_detectadas');
    }
};
