<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable=['Clave_D','Nombre','Domicilio','Telefono','Email','Curp'];
}
