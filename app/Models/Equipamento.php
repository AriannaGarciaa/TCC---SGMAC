<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $table = 'equipamentos'; // Define o nome da tabela
    protected $primaryKey = 'idEquipamentos'; // Define a chave primária

    protected $fillable = [
        'BTU_Capacidade',  
        'Marca',           
        'anoFabricacao',   
        'dataInstalacao',  
        'Status',          
        'Local_idLocal',   
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, 'Local_idLocal', 'idLocal');
    }

    public function manutencoes()
    {
        return $this->belongsToMany(Manutencao::class, 'manutencoes_has_equipamentos', 'Equipamentos_idEquipamentos', 'Manutencoes_idManutencoes');
    }
}
