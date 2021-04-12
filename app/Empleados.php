<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = ['Nombre', 'ApellidoPaterno', 'ApellidoMaterno','Correo'];
}
