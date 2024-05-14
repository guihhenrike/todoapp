<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(Request $request) {
        //dd(Auth::user());
        return view('login');
    }

    public function login_action(Request $request) {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($validator)) {
            return redirect()->route('home');
        } 
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

       $data['password'] = Hash::make($data['password']);

       User::create($data);
       
       return redirect(route('login'));
    }
}
