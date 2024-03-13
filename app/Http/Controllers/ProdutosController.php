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
        $findProduto = $this->produto::all();

        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function destroy($id)
    {
        $produto = $this->produto->findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }
}
