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
        Schema::create('manutencoes_equipamentos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->unsignedBigInteger('manutencao_id'); // Chave estrangeira para manutenção
            $table->unsignedBigInteger('equipamento_id'); // Chave estrangeira para equipamento
            $table->timestamps(); // Timestamps para created_at e updated_at

            // Chaves estrangeiras e restrições
            $table->foreign('manutencao_id')->references('id')->on('manutencoes')->onDelete('cascade');
            $table->foreign('equipamento_id')->references('id')->on('equipamentos')->onDelete('cascade');

            // Índice único para evitar duplicações na relação
            $table->unique(['manutencao_id', 'equipamento_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manutencoes_equipamentos');
    }
};
