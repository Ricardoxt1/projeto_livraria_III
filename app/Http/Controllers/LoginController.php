<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site.client.login', ['titulo' => 'Login']);
    }

    public function authenticate(Request $request){

        $regras = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório.',
            'email' => 'O campo :attribute deve ser um e-mail válido.',

        ];

        $request->validate($regras, $feedback);
        print_r($request->all());
    }
}
