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
        //dd($request); //testar se pesquisa está passando informação
       $pesquisar = $request->pesquisar;
       //dd($pesquisar); // testar se $pesquisar está recebendo dados do $request
       $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar);

        return view('pages.produtos.paginacao', compact('findProduto'));
    }
//apagar produto
  /**  public function destroy($id)
    {
        $produto = $this->produto->findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }**/
}
