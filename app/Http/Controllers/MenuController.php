<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request) {
        $sucess = '';

        if($sucess = $request->get('sucess')) {
            $sucess = 'Login realizado com sucesso!';
        }

        return view('site.menu', ['sucess' => $sucess]);
    }
}
