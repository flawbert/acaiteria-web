<?php

use Illuminate\Support\Facades\Route;
use App\Models\Acai;
use App\Models\Cliente;
use App\Models\Cobertura;
use App\Models\Endereço;
use App\Models\Pedido;
use App\Models\Produto;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'home']);

Route::get('/cardapio', [HomeController::class, 'cardapio']);


Route::post('/cardapio/cadastrar', [HomeController::class, 'cadastrarCardapio']);


Route::get('/pedido/novo', [HomeController::class, 'novoPedido']);

Route::post('/pedido/fazer', [HomeController::class, 'fazerPedido']);

Route::get('/pedidos/meus/{id}', [HomeController::class, 'meusPedidos']);

Route::get('/pedido/detalhar/{id}', [HomeController::class, 'detailPedido']);



Route::get('/sobreNos', [HomeController::class, 'sobreNos']);


Route::get('/', [HomeController::class, 'index']);

Route::get('/cliente/novo', [HomeController::class, 'novoCliente']);

Route::post('/cliente/cadastrar', [HomeController::class, 'cadastrarCliente']);

Route::get('/cliente/detalhar/{id}', [HomeController::class, 'detalharCliente']);


