<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    use HasFactory;

    protected $table = 'servidor'; // Define o nome da tabela
    protected $primaryKey = 'idServidor'; // Define a chave primária

    protected $fillable = [
        'nome',
        'Email',
        'Funcao',
        'Senha'
        
    ];
}
