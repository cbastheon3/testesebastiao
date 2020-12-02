<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
    	return view ("welcome");
    }
    public function enviar(Request $request){
    	$produtos = new App\Produto();
		$produtos->codigo = $request->get("Codigo do produto");
		$produtos->codigo = $request->get("Nome do produto");
		$produtos->codigo = $request->get("Categoria");
		$produtos->codigo = $request->get("Preco unitario");
		$produtos->codigo = $request->get("Descricao");

		$produtos->save();
    }

    public function lista(){
    	return view('lista', array('produtos' => Produto::all()));
    }
}
