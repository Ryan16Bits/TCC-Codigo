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
        Schema::create('leitura_batimentos', function (Blueprint $table) {
            $table->id('idBatimento');
            $table->unsignedBigInteger('idDispositivo');
            $table->unsignedBigInteger('idLeitura');
            $table->integer('bpm');
            $table->timestamp('detectadoEm');
            $table->timestamps();
            $table->foreign('idDispositivo')->references('idDispositivo')->on('dispositivos')->onDelete('cascade');
            $table->foreign('idLeitura')->references('idLeitura')->on('leitura_sensores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leitura_batimentos');
    }
};