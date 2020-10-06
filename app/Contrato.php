<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
    protected $fillable = [
        'id', 'tipo_contrato', 'envolvido_1', 'envolvido_2', 'data_contrato', 'valor', 'nome_tabeliao'
    ];
}