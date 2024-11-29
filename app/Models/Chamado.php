<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $table = 'chamados';
    protected $primaryKey = 'idChamado'; 

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
        return $this->hasMany(Manutencao::class, 'chamado_id', 'idChamado'); 
    }
}
