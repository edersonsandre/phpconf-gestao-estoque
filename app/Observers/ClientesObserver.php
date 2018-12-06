<?php

namespace App\Observers;

use App\Clientes;

class ClientesObserver
{

    public function saving(Clientes $cliente){
        $this->clear($cliente);


    }

    protected function clear($cliente){

        $cliente->cpf = preg_replace('/\D/','', $cliente->cpf);
        $cliente->telefone = preg_replace('/\D/','', $cliente->telefone);


        return $cliente;
    }


}
