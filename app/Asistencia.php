<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['id','Asistencias','Faltas','Periodo','Materia','Semestre','Grupo','PorcentajeAsistencias'];
}
