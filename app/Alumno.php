<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = [
        'Numero','Clave_A', 'Nombre_A', 'Nombre_P','Nombre_M','Domicilio','Domicilio',
      'Telefono_T','Telefono_A','Poblacion','Municipio','Fecha_Nac',
      'Edad','Email','Curp','NSS','Sexo','Semestre','Grado','Estado'
    ];
}
