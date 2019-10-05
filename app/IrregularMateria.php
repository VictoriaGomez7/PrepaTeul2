<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IrregularMateria extends Model
{
    protected $fillable = ['id','Clave_A','Clave_M','Calificacion1','Fecha','Oportunidades']; 
}
