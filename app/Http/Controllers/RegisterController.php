<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');  // Devuelve la vista de registro
    }

    public function register(Request $request)
    {
        // Validación de los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Crear el token para el usuario recién registrado
        $token = $user->createToken('personal-token')->plainTextToken;

        // Guardar el token en una cookie (se maneja automáticamente con Sanctum)
        // La cookie se enviará al frontend cuando el usuario se registre correctamente

        // Redirigir a la página de inicio o alguna página que prefieras
        return redirect()->route('admin');  // Redirige al panel de administración
    }
}
