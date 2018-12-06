<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientesController extends Controller
{
    public function index(){
        $view = view('clientes.index');


        return $view;
    }
}
