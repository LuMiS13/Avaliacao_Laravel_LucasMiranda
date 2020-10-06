<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    protected $table = 'tabelioes';
    protected $fillable = [
        'id', 'nome_tabeliao'
    ];
}
