<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IrregularMateriaHistorico extends Model
{
    protected $fillable =   ['id','Clave_A','Clave_M','Calificacion1','Oportunidades','Fecha']; 
}
