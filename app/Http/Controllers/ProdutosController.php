<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $findProduto = Produto::all();

        //dd($findProduto); //verificando se está retornando dados.

        return view('pages.produtos.paginacao', compact('findProduto'));
    }
}
