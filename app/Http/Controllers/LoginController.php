<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $usuario = User::where('login', $request->login)->first();
        if (
            !$usuario ||
            !Hash::check($request->password, $usuario->password)
        ) {
            return response()->json(
                ['error' => 'Credenciales no válidas'],
                401
            );
        } else {
            return response()->json(['token' =>
            $usuario->createToken($usuario->login)->plainTextToken]);
        }
    }
}
