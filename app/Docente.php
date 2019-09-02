<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
	protected $fillable = ['Clave_D','Nombre','Direccion','Telefono'];
}
