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





        // Mostrar el formulario de login
        public function showLoginForm()
        {
            return view('login');  // Asegúrate de tener la vista 'auth.login'
        }

        // Procesar el login
        public function login(Request $request)
        {
            // Validación de los datos de login
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);

            // Intentar autenticar al usuario
            if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                // Redirigir al usuario a una página protegida, como el panel de administración
                return redirect()->route('admin');
            }

            // Si el login falla, redirigir con mensaje de error
            return redirect()->route('login')->withErrors(['error' => 'Credenciales incorrectas']);
        }





        public function logout(Request $request)
        {
            $user = auth()->user();

            if ($user) {
                // Revocar TODOS los tokens del usuario si existen (evita el error de TransientToken)
                $user->tokens()->delete();
            }

            // Cerrar sesión usando el guard `web`
            auth('web')->logout();

            // Invalidar la sesión y regenerar el token CSRF
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('success', 'Has cerrado sesión correctamente.');
        }





}

