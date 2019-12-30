<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App;
use App\Cliente;
use App\Ciudad\Departamento\Departamento;
use App\poliza\poliza;
use App\vendedores\vendedores;
use App\Evaluaciones\Evaluaciones;

class EvaluacionController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {

       
        return view('gestion.evaluacion');

    }

    public function listaclientes() {
        
        $clientes = App\Cliente::all();

        return view('gestion.cliente', compact('clientes'));

    }

    //public function selectcliente($id) { $cliente = App\Cliente::FindOrFail($id);$detallecliente = $cliente->dni;return view('gestion.evaluacionform', compact('detallecliente'));}

    public function crearcliente(Request $request) {

        $detallecliente = $request->nro_documento;
        $Cliente =  App\Cliente::where('nro_documento', '=', $detallecliente)->first();

        $departamentos=Departamento::all(); 
        $polizas=poliza::all(); 
        $vendedores=Vendedores::all();  

        $ClienteNuevo=evaluaciones::all();
        if ($Cliente === null) {

            $request->validate([
                'tipo_documento' => 'required',
                'nro_documento' => 'required',
                'nombres' => 'required',
                'apellidos' => 'required',
                'direccion' => 'required',
                'telefono' => 'required'

            ]);
            
            $ClienteNuevo = New App\Cliente;
            $ClienteNuevo->tipo_documento = $request->tipo_documento;
            $ClienteNuevo->nro_documento = $request->nro_documento;
            $ClienteNuevo->nombres = $request->nombres;
            $ClienteNuevo->apellidos = $request->apellidos;
            $ClienteNuevo->direccion = $request->direccion;
            $ClienteNuevo->telefono = $request->telefono;

            $detallecliente = $ClienteNuevo->nro_documento; 
            $ClienteNuevo->save();

            
   
            return view('gestion.evaluacionform' , compact('detallecliente','departamentos', 'polizas', 'vendedores' ));


        } else {

            $request->validate([

                'nro_documento' => 'required',

            ]);
           
            return view('gestion.evaluacionform' , compact('detallecliente','departamentos', 'polizas', 'vendedores')); 
            
        }

       
        

        

    }

    public function crearevaluacion(Request $request)
    {
   

        $request->validate([
            

        ]);


   
    $EvaluacionNuevo = New App\evaluaciones\evaluaciones;

     evaluaciones::create($request->all());
     //return $request;
         
       /* $EvaluacionNuevo->vendedores_id = $request->vendedores_id;
        $EvaluacionNuevo->departamentos_id = $request->departamentos_id;
        $EvaluacionNuevo->email_vendedor = $request->email_vendedor;
        $EvaluacionNuevo->provincias_id = $request->provincias_id;
        $EvaluacionNuevo->distritos_id = $request->distritos_id;
        $EvaluacionNuevo->coordenadas = $request->coordenadas;
        $EvaluacionNuevo->polizas_id = $request->polizas_id;
        $EvaluacionNuevo->observaciones = $request->observaciones;
        $EvaluacionNuevo->nro_documento_id = $request->$detallecliente;*/

       
        $EvaluacionNuevo->save();
        //return $request;
        return back()->with('mensaje' , 'Visita Tecnica Registrada Correctamente');
        //return back('gestion.evaluacion')->with('mensaje' , 'Visita Tecnica Registrada Correctamente');


    }


}