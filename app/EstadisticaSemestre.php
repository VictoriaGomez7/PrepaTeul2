<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticaSemestre extends Model
{
    protected $fillable = ['id','Aprobados','Reprobados','Semestre','Materia','Periodo'];
}
