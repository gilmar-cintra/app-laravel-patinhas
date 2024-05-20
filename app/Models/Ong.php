<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'uf',
        'cidade',
        'email',
        'telefone',
        'senha',
        'foto'
    ];
}
