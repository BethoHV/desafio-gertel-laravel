<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|min:11',
            'data_nascimento' => 'required|date|before:2000-01-01',
            'cep' => 'required'
        ]);

        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->cep = $request->cep;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro = $request->bairro;
        $cliente->cidade = $request->cidade;
        $cliente->estado = $request->estado;
        $cliente->complemento = $request->complemento;

        $cliente->save();

        
         return response()->json(['success' => 'Formulário enviado com sucesso!']);
    }
}
