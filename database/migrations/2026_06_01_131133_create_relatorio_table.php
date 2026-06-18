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
        Schema::create('relatorio', function (Blueprint $table) {
            $table->id('idRelatorio');
            $table->dateTime('data', precision: 0);
            $table->string('observacao');
            $table->unsignedBigInteger('idPulseira');
            $table->unsignedBigInteger('idEvento');
            $table->foreign('idPulseira')->references('idPulseira')->on('pulseira')->onDelete('cascade');
            $table->foreign('idEvento')->references('idEvento')->on('evento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatorio');
    }
};
