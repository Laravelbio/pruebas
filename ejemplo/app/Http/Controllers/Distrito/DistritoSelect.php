<?php

namespace App\Http\Controllers\Distrito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Ciudad\Distrito\Distrito;
class DistritoSelect extends Controller
{
    public function Distritos($id)
    {
        return Distrito::where('provincia_id',$id)->get();
    }
}