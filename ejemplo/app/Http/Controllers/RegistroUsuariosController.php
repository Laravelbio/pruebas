<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App\User;

class RegistroUsuariosController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth');

    }

    public function index() {

        return view('registrousuarios');

    }



     public function store(Request $request) {

        
            
    $user = new User;
    $user->id_user = $request->id_user;
    $user->dni =  $request->dni;
    $user->nombres =  $request->nombres;
    $user->apellidos =  $request->apellidos;
    $user->email =  $request->email;
    $user->password = bcrypt( $request->password);
    $user->perfil =  $request->perfil;
    $user->asignacion =  $request->asignacion;
    $user->save();



return redirect ('dashboard'); 
        
            
     }

}