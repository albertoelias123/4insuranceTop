<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    /**
     * Atributos que podem ser atribuidos em massa
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'documento',
        'obs',
        'data_de_nascimento',
        'estado_civil',
        'razao_social',
        'nome_de_contato',
        'telefone_de_contato',
    ];

    /**
     * Retorna o Endereço associado a esta Pessoa
     */
    public function endereco()
    {
        return $this->belongsTo('App\Models\Endereco');
    }

    /**
     * Retorna o User associado a esta Pessoa (se existir)
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
