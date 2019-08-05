<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];

    function roupa() {
        return $this->hasMany('App\Roupa');
    }
}
