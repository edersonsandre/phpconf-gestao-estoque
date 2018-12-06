<?php

Route::get('/', function () {
    return view('content');
});



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


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/clientes', 'ClientesController@index')->name('clientes');
    Route::get('/clientes/add', 'ClientesController@add')->name('clientes-add');
    Route::get('/clientes/{id}', 'ClientesController@add')->where('id', '[0-9]+')->name('clientes-edit');
    Route::get('/clientes/delete/{id}', 'ClientesController@delete')->where('id', '[0-9]+')->name('clientes-delete');
    Route::post('/clientes', 'ClientesController@save')->name('clientes-save');

    Route::get('/pedidos', 'PedidosController@index')->name('pedidos');
    Route::get('/pedidos/add', 'PedidosController@add')->name('pedidos-add');
    Route::get('/pedidos/{id}', 'PedidosController@add')->where('id', '[0-9]+')->name('pedidos-edit');
    Route::get('/pedidos/delete/{id}', 'PedidosController@delete')->where('id', '[0-9]+')->name('pedidos-delete');
    Route::post('/pedidos', 'PedidosController@save')->name('pedidos-save');


});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
