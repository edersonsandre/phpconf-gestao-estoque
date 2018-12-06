<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use SoftDeletes;


    protected $table = "clientes";


    public function pedidos(){
        return $this->hasMany(Pedidos::class, 'cliente','id');
    }

}
