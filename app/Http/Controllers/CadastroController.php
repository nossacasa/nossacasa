<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.index');
    }

    public function postData(Request $request)//o $request eh simplesmente um nome
    {
        var_dump($request);
        return "entrei em acao post";
    }
}
