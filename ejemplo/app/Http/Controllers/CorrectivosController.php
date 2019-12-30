<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\vendedores\vendedores;

use App\Ciudad\Departamento\Departamento;
use App\poliza\poliza;

class CorrectivosController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }
 
    public function index() {
        $vendedores = vendedores::all();
        $departamentos=Departamento::all(); 
        $polizas=poliza::all();

        return view('correctivos', compact('vendedores','departamentos', 'polizas'));

    }

}