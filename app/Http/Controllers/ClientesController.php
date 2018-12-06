<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Http\Requests\ClientesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ClientesController extends Controller
{
    public function index(){
        $view = view('clientes.index');

        //DB::enableQueryLog();

        $clientes = Clientes::all();
        // SELECT * FROM clientes;
        //exit("<pre>" . print_r(DB::getQueryLog(), true) . "</pre>");
        $view->clientes = $clientes;


        return $view;
    }

    public function  add($id = null){
        $view = view('clientes.add');
        $view->model = !is_null($id) ? Clientes::find($id) : null;

        // SELECT * FROM clientes WHERE id = 1 LIMIT 1;
        return $view;
    }

    public function save(ClientesRequest $request){


        $cliente = !is_null($request->get('id')) ?
            Clientes::find($request->get('id')) : new Clientes();

        $cliente->nome = $request->get('nome');
        $cliente->telefone = $request->get('telefone');
        $cliente->cpf = $request->get('cpf');
        $cliente->email = $request->get('email');
        $cliente->save();

        return redirect(route('clientes'));
    }

    public function delete($id){
        $cliente = Clientes::find($id);
        $cliente->delete();

        return redirect(route('clientes'));
    }

}
