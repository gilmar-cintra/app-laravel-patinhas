<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'raca_id',
        'descricao',
        'foto',
        'idade',
        'ong_id',
    ];

    // Defina as relações, se necessário
    public function raca()
    {
        return $this->belongsTo(Raca::class);
    }

    public function ong()
    {
        return $this->belongsTo(Ong::class);
    }

    
}
