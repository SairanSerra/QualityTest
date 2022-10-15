<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CadastroClientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = [
        'idUsuario',
        'DataHoraCadastro',
        'Codigo',
        'Nome',
        'CPF_CNPJ',
        'CEP',
        'Logradouro',
        'Endereco',
        'Numero',
        'Bairro',
        'Cidade',
        'UF',
        'Complemento',
        'Fone',
        'LimiteCredito',
        'Validade',
    ];
}
