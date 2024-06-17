<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ListagemController extends Controller
{
    public function showListagem(){
        $clientes = Cliente::All();
        return view('listagem',['clientes' => $clientes]);
    }

}
