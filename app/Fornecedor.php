<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    public $timestamps = false;

    protected $table = 'fornecedores';

    protected $fillable = [
        'nome',
        'nome_fantasia',
        'cnpj'
    ];
}
