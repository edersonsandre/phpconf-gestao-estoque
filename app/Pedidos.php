<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedidos extends Model
{
    use SoftDeletes;


    protected $table = "pedidos";

    public function clientes(){
        return $this->hasOne(Clientes::class, 'id', 'cliente');
    }


}
