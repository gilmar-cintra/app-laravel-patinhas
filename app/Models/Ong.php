<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Ong extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'cep', 'endereco', 'numero', 'complemento', 'bairro', 'uf', 'cidade', 'email', 'telefone', 'password', 'foto'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
