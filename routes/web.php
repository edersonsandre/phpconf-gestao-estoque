<?php

Route::get('/', function () {
    return view('content');
});

Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/clientes/add', 'ClientesController@add')->name('clientes-add');
Route::get('/clientes/{id}', 'ClientesController@add')->where('id', '[0-9]+')->name('clientes-edit');
Route::post('/clientes', 'ClientesController@save')->name('clientes-save');


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





