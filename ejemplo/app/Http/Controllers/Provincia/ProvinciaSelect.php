<?php

namespace App\Http\Controllers\Provincia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ciudad\Provincia\Provincia;
class ProvinciaSelect extends Controller
{
    public function Provincias($id)
    {
        return Provincia::where('departamento_id',$id)->get();  
    }
}
