<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class FormController extends Controller
{
    public function showForm(){
        $clientes = Cliente::All();
        return view('form',['clientes' => $clientes]);
    }

}
