<?php

namespace App\Observers;

use App\Clientes;
use App\Mail\NovoClienteMail;
use Illuminate\Support\Facades\Mail;

class ClientesObserver
{

    public function saving(Clientes $cliente){
        $this->clear($cliente);

        echo "<br />".date("H:i:s");

        if($cliente->id){
            Mail::to($cliente)->queue(new NovoClienteMail($cliente));
        }

        echo "<br />".date("H:i:s");
die;
    }

    protected function clear($cliente){
        $cliente->cpf = preg_replace('/\D/','', $cliente->cpf);
        $cliente->telefone = preg_replace('/\D/','', $cliente->telefone);

        return $cliente;
    }

//    //protected function created(Clientes $cliente){
//    protected function saved(Clientes $cliente){
//
//        exit("<pre>" . print_r($cliente, true) . "</pre>");
//        if($cliente->id){
//
//            Mail::to($cliente)->later(now(), new NovoClienteMail($cliente));
//        }
//    }


}
