<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App;
use App\Cliente;
use App\Vendedores\Vendedores;
use App\Correctivo\Correctivos;

use App\Ciudad\Departamento\Departamento;
use App\poliza\poliza;
use App\Tipoinstalaciones\Tipoinstalaciones;
class RegistrarcorrectivosController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {

        return view('gestion.registrarcorrectivos');

    }

    public function crearcliente(Request $request) {
        $vendedores = vendedores::all();
        $departamentos=Departamento::all(); 
        $polizas=poliza::all();
        $tipoinstalacion=Tipoinstalaciones::all();
        $nombrecliente = $request->nombres;
        $detallecliente = $request->nro_documento;
        $Cliente =  App\Cliente::where('nro_documento','=', $detallecliente)->first();
        if ($Cliente === null) {

            $request->validate([
                'tipo_documento' => 'required',
                'nro_documento' => 'required',
                'nombres' => 'required',
                'apellidos' => 'required',
                'direccion' => 'required',
                'telefono' => 'required'

            ]);

            $ClienteNuevo = New App\Correctivo\Correctivos;
            $ClienteNuevo->tipo_documento = $request->tipo_documento;
            $ClienteNuevo->nro_documento = $request->nro_documento;
            $ClienteNuevo->nombres = $request->nombres;
            $ClienteNuevo->apellidos = $request->apellidos;
            $ClienteNuevo->direccion = $request->direccion;
            $ClienteNuevo->telefono = $request->telefono;
            $detallecliente = $ClienteNuevo->nro_documento;
            $ClienteNuevo->save();
           
            return view('gestion.registrarcorrectivosform' , compact('detallecliente', 'vendedores','departamentos', 'polizas', 'tipoinstalacion', 'nombrecliente'));


        } else {

            $request->validate([

                'nro_documento' => 'required',

            ]);

            return view('gestion.registrarcorrectivosform' , compact('detallecliente', 'vendedores','departamentos', 'polizas', 'tipoinstalacion','nombrecliente'));

        }

       
        

        

    }

    public function crearcorrectivos(){

     Correctivos::create($request->all());

    /* $CorrectivosNuevo = New App\Correctivo\Correctivos;
        $CorrectivosNuevo->documento_cliente = $request->documento_cliente;
        $CorrectivosNuevo->tipo_polizas = $request->Tipo_poliza;
        $CorrectivosNuevo->supervisor = $request->supervisor;
        $CorrectivosNuevo->tipo_instalacion = $request->tipo_instalacion;
        $CorrectivosNuevo->codigo_abonado = $request->codigo_abonado;
        $CorrectivosNuevo->departamento = $request->departamento;
        $CorrectivosNuevo->distrito = $request->distrito;
        $CorrectivosNuevo->provincia = $request->provincia;
        $CorrectivosNuevo->nro_poliza = $request->nro_poliza;
        $CorrectivosNuevo->referencia = $request->referencia;
        $CorrectivosNuevo->asistencia = $request->asistencia;
        $CorrectivosNuevo->horallamada = $request->horallamada;
        $CorrectivosNuevo->fechallamada = $request->fechallamada;
        $CorrectivosNuevo->contacto = $request->contacto;
        $CorrectivosNuevo->asunto = $request->asunto;
        $CorrectivosNuevo->nro_contacto = $request->nro_contacto;
        $CorrectivosNuevo->tema = $request->tema;
        $CorrectivosNuevo->observaciones = $request->observaciones;
         $CorrectivosNuevo->save();*/
       
        return back()->with('mensaje' , 'Correctivo Registrado Correctamente');
        //return back('gestion.evaluacion')->with('mensaje' , 'Visita Tecnica Registrada Correctamente');


    }



}
