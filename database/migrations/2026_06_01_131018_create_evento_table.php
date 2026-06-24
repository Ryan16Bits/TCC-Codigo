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
        Schema::create('evento', function (Blueprint $table) {
            if (!Schema::hasTable('evento')) {
                $table->id('idEvento');
                $table->dateTime('data', precision: 0);
                $table->dateTime('dataVizualizacao', precision: 0);
                $table->enum('status', ['queda', 'bateria 10%', 'descarregado', 'sem conexão']);
                $table->unsignedBigInteger('idPulseira');
                $table->foreign('idPulseira')->references('idPulseira')->on('pulseira')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
