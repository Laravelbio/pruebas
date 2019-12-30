<?php

namespace App\Vendedores;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $table = 'vendedores';
    protected $fillable = ['nombres',];
}
