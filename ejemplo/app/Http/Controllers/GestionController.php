<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedores\Vendedores;
use App\Supervisor\Supervisor;
use App\Ciudad\Departamento\Departamento;
use App\poliza\poliza;
class GestionController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {

        $vendedores = vendedores::all();
        $supervisores = supervisor::all();
        $departamentos=Departamento::all(); 
        $polizas=poliza::all(); 

        return view('Registrarinstalacion', compact('vendedores', 'supervisores','departamentos', 'polizas'));
    // return view('Registrarinstalacion');

    }

}
