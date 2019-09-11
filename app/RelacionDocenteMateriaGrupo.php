<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionDocenteMateriaGrupo extends Model
{
    protected $fillable = ['id','Clave_M','Clave_D','Materia','Grupo'];
}
