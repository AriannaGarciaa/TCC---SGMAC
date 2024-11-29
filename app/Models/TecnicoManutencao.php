<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicoManutencao extends Model
{
    use HasFactory;

    protected $table = 'tecnico_manutencao'; 
    protected $primaryKey = 'IdTecnicoManutencao'; 
  
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
