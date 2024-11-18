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
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id('idEquipamentos');
            $table->string('BTU_Capacidade', 100);
            $table->string('marca', 100);
            $table->date('anoFabricacao');
            $table->date('dataInstalacao')->nullable();
            $table->string('status', 20);
            $table->unsignedBigInteger('local_idLocal');
            $table->timestamps();

            $table->foreign('local_idLocal')->references('idLocal')->on('local');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
    }
};
