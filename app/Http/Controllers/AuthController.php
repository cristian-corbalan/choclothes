<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.authLogin');
    }



    //-----------> Inicio de Sesión

    public function loginAccion(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if(!auth()->attempt($credentials))
        {

            return redirect()

                ->back(fallback: route('auth.loginForm'))
                ->withInput()
                ->with('feedback.message', 'El usuario o contraseña son incorrectas. Por favor intente nuevamente')
                ->with('feedback.type', 'danger');
        }

            return redirect()
                ->route('products.products')
                ->with('feedback.message', 'Inicio de sesión exitoso!');
    }


    public function logoutAccion(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.loginForm')
            ->with('feedback.message', '¡Nos vemos pronto!');
    }




}
