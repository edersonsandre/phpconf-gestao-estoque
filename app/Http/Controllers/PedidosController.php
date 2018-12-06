<?php

namespace App\Http\Controllers;

use App\Pedidos;
use App\Http\Requests\PedidosRequest;


class PedidosController extends Controller
{
    public function index(){
        $view = view('pedidos.index');

        //DB::enableQueryLog();

        $pedidos = Pedidos::all();
        // SELECT * FROM pedidos;
        //exit("<pre>" . print_r(DB::getQueryLog(), true) . "</pre>");
        $view->pedidos = $pedidos;


        return $view;
    }

    public function  add($id = null){
        $view = view('pedidos.add');
        $view->model = !is_null($id) ? Pedidos::find($id) : null;

        // SELECT * FROM pedidos WHERE id = 1 LIMIT 1;
        return $view;
    }

    public function save(PedidosRequest $request){


        $pedido = !is_null($request->get('id')) ?
            Pedidos::find($request->get('id')) : new Pedidos();

        $pedido->cliente = $request->get('cliente');
        $pedido->data = $request->get('data');
        $pedido->save();


        return redirect(route('pedidos'));
    }

    public function delete($id){
        $pedido = Pedidos::find($id);
        $pedido->delete();

        return redirect(route('pedidos'));
    }

}
