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
        Schema::create('leitura_sensores', function (Blueprint $table) {
            $table->id('idLeitura');
            $table->unsignedBigInteger('idDispositivo');
            $table->float('acelX', precision: 53);
            $table->float('acelY', precision: 53);
            $table->float('acelZ', precision: 53);
            $table->float('giroX', precision: 53);
            $table->float('giroY', precision: 53);
            $table->float('giroZ', precision: 53);
            $table->float('magnitudeAcel', precision: 53);
            $table->float('temperatura', precision: 53);
            $table->timestamps();
            $table->foreign('idDispositivo')->references('idDispositivo')->on('dispositivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leitura_sensores');
    }
};
