<?php

use App\Http\Controllers\RecentUpdateController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Rotas dos serviços do sistema de gestão
|--------------------------------------------------------------------------

*/


Route::get('/', function () {
    return view('index');
});

//Produtos --
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
   
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});


//POST - Postagem de conteúdo 

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/', [PostController::class, 'index'])->name('home');

//Primeira página

Route::get('/', function () { return view('home');
});

//acesso ao banco de dados
Route::get('/recent-updates', [RecentUpdateController::class, 'index'])->name('recent_updates');



