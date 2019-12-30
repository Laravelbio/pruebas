<?php

namespace App\Ciudad\Provincia;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    protected $fillable = ['departamento_id','descripcion',];    
}
