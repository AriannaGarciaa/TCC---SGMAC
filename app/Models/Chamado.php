<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $table = 'chamados'; // Define o nome da tabela
    protected $primaryKey = 'idChamado'; // Define a chave primária

    protected $fillable = [
        'Local',
        'DescricaoProblema',
        'NomePessoa',
        'Status',
        'Solução',
        'Email'

    ];

    public function manutencoes()
    {
        return $this->hasMany(Manutencao::class, 'chamado_id', 'idChamado'); // Atualize os campos se necessário
    }
}
