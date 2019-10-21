<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $fillable = ['Clave_A','Clave_M','Fecha','Oportunidades','Calificacion','Grupo']; 
}
