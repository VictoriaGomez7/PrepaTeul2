<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['Clave_A','Asistencias','Retardos','Faltas','Periodo','Materia'];
}
