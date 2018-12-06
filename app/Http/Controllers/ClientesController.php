<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Http\Requests\ClientesRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientesController extends Controller
{
    public function index(){
        $view = view('clientes.index');

        $clientes = Clientes::all();
        // SELECT * FROM clientes;

        $view->clientes = $clientes;


        return $view;
    }

    public function  add(){
        $view = view('clientes.add');
        $view->model = null;

        return $view;
    }

    public function save(ClientesRequest $request){


        $cliente = new Clientes();
        $cliente->nome = $request->get('nome');
        $cliente->telefone = $request->get('telefone');
        $cliente->cpf = $request->get('cpf');
        $cliente->email = $request->get('email');
        $cliente->save();

        return redirect(route('clientes'));
    }

}
