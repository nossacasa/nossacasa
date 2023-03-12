<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_consulente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'dtnascimento',
        'phone',
        'cep',
        'nmlogradouro',
        'nrlogradouro',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'email',
        'inddoencacronica' => 0,
        'descdoenca',
        'dtcadastro',
        'usuarioinclusao' => 'Anderson',
    ];
    public $timestamps = false;
}
