<?php

namespace App\Evaluaciones;

use Illuminate\Database\Eloquent\Model;

class Evaluaciones extends Model
{
protected $table = 'evaluaciones';
protected $fillable = ['polizas_id', 'departamentos_id', 'provincias_id', 
'distritos_id', 'nro_documento_id', 'vendedores_id',
'email_vendedor', 'coordenadas', 'observaciones'];

}
