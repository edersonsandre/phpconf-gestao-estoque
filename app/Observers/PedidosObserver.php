<?php

namespace App\Observers;

use App\Pedidos;

class PedidosObserver
{

    public function saving(Pedidos $pedido){
        $this->clear($pedido);


    }

    protected function clear($pedido){



        return $pedido;
    }


}
