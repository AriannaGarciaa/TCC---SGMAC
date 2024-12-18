<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


class AuthController extends Controller
{
    // Tela de Login
    public function login()
    {
        return view('login');
    }

    // Processar Login
    public function logar(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirecionar para a página inicial após o login
            return redirect()->route('index');
        }

        // Retorna erro se falhar
        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
