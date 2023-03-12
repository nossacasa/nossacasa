<?php

namespace App\Http\Controllers;

use App\Models\tb_consulente;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.index');
    }

    public function store(Request $request)//o $request eh simplesmente um nome
    {

        dd($request);
        // $insert = [
        // 'nome' => trim($request->nome),
        // 'dtnascimento' => $request->dtnascimento,
        // 'telefone' => $request->phone,
        // 'cep' => $request->cep,
        // 'nmlogradouro' => trim($request->rua),
        // 'nrlogradouro' => trim($request->numero),
        // 'complemento' => trim($request->complemento),
        // 'bairro' => trim($request->bairro),
        // 'cidade' => trim($request->cidade),
        // 'uf' => trim($request->uf),
        // 'email' => trim($request->email),
        // 'inddoencacronica' => trim($request->inddoencacronica),
        // 'descdoenca' => trim($request->descdoenca),
        // 'dtcadastro' => time(),
        // 'usuarioinclusao'  => null
        // ];
        // tb_consulente::create($insert);

    }
}
