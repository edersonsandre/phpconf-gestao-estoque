<?php

namespace App\Http\Controllers;

use App\Clientes;
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

        return $view;
    }

}
