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
        // Tabela Servidor
        Schema::create('servidor', function (Blueprint $table) {
            $table->id('idServidor');
            $table->string('nome', 255);
            $table->string('email', 100)->unique();
            $table->string('funcao', 20);
            $table->string('senha', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servidor');
    }
};
