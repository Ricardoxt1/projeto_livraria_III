<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('site.client.register', ['titulo' => 'Cadastro de Usuário']);
    }
}
