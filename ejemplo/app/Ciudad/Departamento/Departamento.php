<?php

namespace App\Ciudad\Departamento;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['descripcion',];
}
