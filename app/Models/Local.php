<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table = 'local'; 
    protected $primaryKey = 'idLocal'; 
     
    protected $fillable = [
        'bloco',       
        'sala',        
        'tamanho_anoSala', 
        'Status',     
     ];

    public function equipamentos()
    {
        return $this->hasMany(Equipamento::class, 'Local_idLocal', 'idLocal');
    }
}
