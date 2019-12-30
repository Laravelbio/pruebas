<?php

namespace App\poliza;

use Illuminate\Database\Eloquent\Model;

class poliza extends Model
{
    protected $table = 'polizas';
    protected $fillable = ['nombre',];
}
