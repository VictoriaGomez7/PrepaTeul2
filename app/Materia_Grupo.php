<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia_Grupo extends Model
{
    //

    protected $fillable = ['id',
        'Clave_M', 'Grupo','Semestre'];
}
