<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\Acai;

class HomeController extends Controller
{
    public function index(){
        $clientes = Cliente::getTodosOrdemAlfabetica();
        return view('index', compact('clientes'));

    }
    public function novoCliente(){
        return view('form');
    }
    public function cadastrarCliente(Request $request){ 
        $c = new Cliente([
            "nome" => $request->nome,
            "cpf" =>$request->cpf,
            "ddd" =>$request->ddd,
            "numero" =>$request->numero,
            "datanascimento" => $request->datanascimento,
            "email" => $request->email,
            "senha" =>$request->senha

        ]);
        $c->save();
        return redirect('/');
    }
    public function detalharCliente($id){
        $cliente = Cliente::find($id);
        return view('detail' , compact('cliente'));
    }






    
    public function novoPedido(){
        $clientes = Cliente::all();
        return view('novoPedido', compact('clientes'));
    }
    public function fazerPedido(Request $request){ 
        $cliente = Cliente::find($request->clientes_idCliente);
        $pedido = new Pedido([
            "formapagamento" =>$request->formapagamento,
            "datahora" => date('Y-m-d H:i:s'),
            "preco" => $request->preco,
        ]);
        $cliente->incluirPedido($pedido);
        return redirect('/pedido/fazer');
    }

    public function meusPedidos($id){
        $pedido = Pedido::find($id);
        return view ('meusPedidos', compact('pedido'));
    }

    public function detailPedido($id){
        $pedi = Pedido::find($id);
        return view ('detailPedido', compact('pedi'));
    }



    public function home(){
        return view('home');
    }



    public function cardapio(){
        $acais = Acai::getTodosOrdemPreco();
        return view('cardapio', compact('acais'));
    }


    public function cadastrarCardapio(Request $request){

        $acai = new Acai([
            "preco" =>$request->preco
        ]);
        $acai->save();
        return redirect('/cardapio/cadastrar');
    }



    public function sobreNos(){
        return view('sobreNos');
    }
}
