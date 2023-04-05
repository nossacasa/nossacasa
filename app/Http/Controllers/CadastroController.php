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

        $insert = new tb_consulente();
        $insert->nome = trim($request->nome);
        $insert->dtnascimento = trim($request->dtnascimento);
        $insert->telefone = $request->telefone;
        $insert->cep = trim($request->cep);
        $insert->nmlogradouro = trim($request->rua);
        $insert->nrlogradouro = trim($request->numero);
        $insert->complemento = trim($request->complemento);
        $insert->bairro = trim($request->bairro);
        $insert->cidade = trim($request->cidade);
        $insert->uf = trim($request->uf);
        $insert->email = trim($request->email);
        $insert->inddoencacronica = $request->inddoencacronica;
        $insert->descdoenca = trim($request->descdoenca);

        $insert->save();

        return redirect('/site')->with( 'msg', 'Consulente cadastrado com sucesso');
        //dd($request);
        // $insert = [
        // 'nome' => trim($request->nome),
        // 'dtnascimento' => $request->dtnascimento,
        // 'telefone' => $request->telefone,
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
        // //'dtcadastro' => date("Y-m-d"),
        // //'usuarioinclusao'  => null
        // ];
        // tb_consulente::create($insert);




}
}
