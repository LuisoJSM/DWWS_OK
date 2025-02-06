<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Crear un token personal para el usuario autenticado
            // $token = auth()->user()->createToken('personal-token', ['*'], now()->addDay())->plainTextToken;

            // Devolver el token generado
            return response()->json(['token' => $token]);
        }

        // Si la autenticación falla, redirigir al login con un mensaje de error
        return redirect('/login')->withErrors(['error' => 'Credenciales incorrectas']);
    }
}
