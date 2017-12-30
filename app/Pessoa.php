<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'pessoas';

    public function telefones()
    {
        return $this->hasMany(Telefone::class, 'pessoa_id');
    }

    public static function indexLetra($letra)
    {
        return static::where('nome', 'LIKE', $letra . '%')->get();
    }

    public static function busca($criterio)
    {
      return static::where('nome', 'LIKE', '%' . $criterio . '%')->get();
    }
}
