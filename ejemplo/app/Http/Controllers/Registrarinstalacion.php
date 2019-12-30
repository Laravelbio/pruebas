<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use App\vendedor\vendedor;
use App\Ciudad\Departamento\Departamento;
use App\poliza\poliza;

class GestionController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() 
    {
        $vendedores = vendedor::all();
        $supervisores = supervisor::all();

        $departamentos=Departamento::all(); 
        $polizas=poliza::all(); 


        return view('gestion', compact('vendedores', 'supervisores','departamentos', 'polizas'));

    }
   
   
}
