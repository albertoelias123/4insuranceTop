<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    /**
     * Atributos que podem ser atribuidos em massa
     *
     * @var array
     */
    protected $fillable = [
        'CEP',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
    ];

    /**
     * Retorna a pessoa associada a este Endereço
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Pessoa');
    }
}
