<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    //
    public function index(Request $request) {
        return view('login');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function register_action(Request $request) {
        /*
                Regras para registro

            -   O usuario tem que ter um nome
            -   O email tem que ser unico na tabela users
            -   Todos os campos são REQUIRED
            -   Password tem que ter no minimo 6 caracteres

        */
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);


       $data = $request->only('name', 'email', 'password');
       User::create($data);

       return redirect(route('login'));
    }
}
