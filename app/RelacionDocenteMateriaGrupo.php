<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionDocenteMateriaGrupo extends Model
{
    protected $fillable = ['id','ClaveMateria','Clave_D','Materia','Grupo'];
}
