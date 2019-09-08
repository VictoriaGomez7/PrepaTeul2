<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariomaestro extends Model
{
    protected $fillable = [
        'id', 'Usuario','Password'
    ];
}
