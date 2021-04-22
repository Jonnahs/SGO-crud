<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sgo extends Model
{
    use HasFactory;

    protected $table = 'sgo';
    public $timestamps = true;

    protected $fillable = [
        'cod_vend',
        'nome',
        'cpf',
        'status',
        'caixa',
        'login_sistema',
        'setor',
        'unidade',
        'gestor1',
        'gestor2',
        'gestor3',
        'created_at'
    ];
}
