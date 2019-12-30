<?php

namespace App\Ciudad\Distrito;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';
    protected $fillable = ['provincia_id','descripcion',];
}
