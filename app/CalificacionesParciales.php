<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalificacionesParciales extends Model
{
    protected $fillable = ['id','ClaveA','ClaveM','Grupo','Parcial1','Parcial2','Semestral','Semestre','Año'];
}
