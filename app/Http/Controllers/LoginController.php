<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('site.client.login', ['titulo' => 'Login']);
    }

    public function authenticate(){
        return view('site.client.login', ['titulo' => 'Login']);
    }
}
