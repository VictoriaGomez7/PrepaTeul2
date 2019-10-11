<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticaPeriodo extends Model
{
    protected $fillable = ['id','Aprobados','Reprobados','Parcial1','Parcial2','Semestre','Materia','Periodo'];
}
