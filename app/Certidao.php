<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $table = 'certidoes';
    protected $fillable = [
        'id', 'tipo_certidao', 'envolvido_1', 'envolvido_2', 'data_certidao', 'nome_tabeliao'
    ];
}