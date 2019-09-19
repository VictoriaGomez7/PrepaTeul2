<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
	protected $fillable = ['id','Clave_D','Nombre','Direccion','Telefono'];
}
