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
        Schema::create('manutencoes', function (Blueprint $table) {
            $table->id('idManutencoes');
            $table->unsignedBigInteger('servidor_idServidor');
            $table->unsignedBigInteger('tecnico_manutencao_idTecnicoManutencao');
            $table->text('problema', 300);
            $table->text('solucao', 300)->nullable();
            $table->string('status', 20);
            $table->string('tipoManutencao', 50);
            $table->date('dataAbertura');
            $table->date('dataUltimaAtualizacao')->nullable();
            $table->string('numeroOrdemDeServico', 300);
            $table->timestamps();

            $table->foreign('servidor_idServidor')->references('idServidor')->on('servidor');
            $table->foreign('tecnico_manutencao_idTecnicoManutencao')->references('idTecnicoManutencao')->on('tecnico_manutencao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manutencoes');
    }
};
