<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticaPeriodo extends Model
{
    protected $fillable = ['id','Aprobados1','Reprobados1','Aprobados2','Reprobados2','Semestre','Materia','Grupo','Periodo'];
}
