<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
                                       // dd($request); //testar se pesquisa está passando informação
       $pesquisar = $request->pesquisar;
                                     // dd($pesquisar); // testar se $pesquisar está recebendo dados do $request
       $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request)
    {
      $id = $request->id;
      $buscaregistro = Produto::find($id);
      $buscaregistro->delete();

      return response()->json(['success'=>true]);
    }


    public function cadastrarProduto(Request $request)
    {
        dd($request->method());

        if ($request->method() == "POST"){
            //criar os dados
        } 

        return view('pages.produtos.create');
    }


}