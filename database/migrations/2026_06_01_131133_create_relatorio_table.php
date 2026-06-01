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
            $table->foreignId('idPulseira')->constrained('create_pulseira_table')->cascadeOnDelete();
            $table->foreignId('idEvento')->constrained('create_evento_table')->cascadeOnDelete();
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
