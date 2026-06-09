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
        Schema::create('idoso', function (Blueprint $table) {
            $table->id('idIdoso');
            $table->string('nome');
            $table->string('peso');
            $table->string('altura');
            $table->dataTime('dataNascimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idoso');
    }
};
