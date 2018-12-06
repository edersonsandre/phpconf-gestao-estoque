<?php

Route::get('/', function () {
    return view('content');
});

Route::get('/clientes', 'ClientesController@index')->name('clientes');


//Route::get('clientes', function () {
//
//    $cliente = new \App\Clientes();
//    $cliente->nome = 'Ederson Sandre';
//    $cliente->cpf = '886.183.711-57';
//    $cliente->telefone = '(14) 99733-8022';
//    $cliente->email = 'ederson.sandre@gmail.com';
//    //$cliente->save();
//
//    return "FIM CLIENTE";
//});





