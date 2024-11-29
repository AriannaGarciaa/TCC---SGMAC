<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Route::resource('servidores', ServidorController::class);
    Route::resource('chamados', ChamadoController::class);
    Route::resource('manutencoes', ManutencaoController::class);
    Route::resource('tecnicos', TecnicoManutencaoController::class);
    Route::resource('equipamentos', EquipamentoController::class);
    Route::resource('locais', LocalController::class);
    Route::resource('manutencoes-equipamentos', ManutencoesEquipamentosController::class); 
   
    return view('welcome');
});
