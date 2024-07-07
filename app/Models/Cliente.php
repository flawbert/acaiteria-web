<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [

        "nome", "cpf",  "ddd", "numero", "datanascimento",
        "email", "senha"

    ];
    public static function getTodosOrdemAlfabetica(){

        return Cliente::orderBy('nome')->get();

    }

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function incluirPedido(Pedido $p){
        $this-> pedidos()->save($p);
    }
}
 