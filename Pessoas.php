<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = [
        'Nome',
        'Sobrenome',
        'Email',
        'PessoaJuridica',
        'cpf',
        'cnpj'
    ];

}