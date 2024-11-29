<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    use HasFactory;

    protected $table = 'servidor';
    protected $primaryKey = 'idServidor';  
   

    protected $fillable = [
        'nome',
        'Email',
        'Funcao',
        'Senha'
        
    ];
}
