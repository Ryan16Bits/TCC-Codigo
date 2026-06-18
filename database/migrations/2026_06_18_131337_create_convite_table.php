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
        Schema::create('convite', function (Blueprint $table) {
            $table->id('idConvite');
            $table->string('email')->unique();
            $table->string('token', 64)->unique();
            $table->timestamp('expiraEm')->nullable();
            $table->timestamp('aceitoEm')->nullable();
            $table->unsignedBigInteger('convidadoPor');
            $table->timestamps();
            $table->foreign('convidadoPor')->references('idUsuario')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convite');
    }
};
