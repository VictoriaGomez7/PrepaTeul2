<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionesParciales extends Model
{
    protected $fillable = ['id','Clave_A','Clave_M','Parcial1','Parcial2','Semestre','Año'];
}
