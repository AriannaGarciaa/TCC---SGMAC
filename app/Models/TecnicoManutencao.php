<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicoManutencao extends Model
{
    use HasFactory;

    protected $table = 'tecnico_manutencao'; // Define o nome da tabela
    protected $primaryKey = 'idTecnicoManutencao'; // Define a chave primária

    protected $fillable = [
        'nome',
        'empresa',
        'status',
    ];

    public function manutencoes()
    {
        return $this->hasMany(Manutencao::class, 'tecnico_manutencao_idTecnicoManutencao', 'idTecnicoManutencao');
    }
}
