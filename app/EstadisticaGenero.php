<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticaGenero extends Model
{
    protected $fillable = ['id','Hombres','Mujeres','Grupo','Semestre','Periodo'];
}
