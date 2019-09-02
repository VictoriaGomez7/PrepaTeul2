<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['Clave_M','Tipo','Bachillerato','Nombre','Semestre','Horas']; 
}
