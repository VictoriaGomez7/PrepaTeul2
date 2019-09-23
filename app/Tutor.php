<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = ['id', 'Nombre_D','Grado','Grupo'];
}
