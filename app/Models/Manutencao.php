<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;

    protected $table = 'manutencoes'; // Define o nome da tabela
    protected $primaryKey = 'idManutencoes'; // Define a chave primária

    protected $fillable = [
        'tecnico_manutencao_idTecnicoManutencao',
        'Problema',
        'Solucao',
        'Status',
        'TipoManutencao',
        'DataAbertura',
        'DataUltimaAtualizacao'
    ];

    public function tecnicoManutencao()
    {
        return $this->belongsTo(TecnicoManutencao::class, 'tecnico_manutencao_idTecnicoManutencao', 'idTecnicoManutencao');
    }
}