<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected function autenticar(Request $request)
    {
      $this->validate($request,[

              'password'=> 'required',
      ]);

      if ($request->password == '1q2w3e4r') {

        session()->put('logueado', 'si');
        return redirect()->action('CitasController@index');

      }else {
        return redirect('/login')->with('status', 'Contraseña incorrecta!');
      }
    }

    protected function logout()
    {

        session()->flush();
        return redirect('/');
    }

}
