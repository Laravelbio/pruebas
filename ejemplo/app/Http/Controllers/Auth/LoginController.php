<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function showLoginForm() {

        return view('auth.login');

    }

   public function login()
   {
       $credentials = $this->validate(request(), [  //VALIDACION ITEMS DE PRUEBA INPUT EMAIL Y PASSWORD ... EMAIL DE PRUEBA: homestead@localhost 

        $this->id_user() => 'required|string',
        'password' => 'required|string',

       ]);

          if(Auth::attempt($credentials)) //ARREGLO DE VALIDACION ... ANEXANDO FUNCIONALIDAD TINKER PARA PROBAR VALIDACION CORRECTA
          {
              return redirect()->route('dashboard');   }
          
           
            return back()
            ->withErrors([ $this->id_user() => trans('auth.failed')]) 
            ->withInput(request([ $this->id_user()])); //ERRORES AL CAMPO EMAIL POR FALLAS EN VALIDACION
    
   }

   public function logout() 
   {

    Auth::logout();
    return redirect('/');

   }

   public function id_user()
   {
       return 'id_user';
   }

}
