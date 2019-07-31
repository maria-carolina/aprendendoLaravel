<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roupa extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'quantidade',
        'categoria_id',
        'tamanho_id',
        'fornecedor_id'
    ];
}
