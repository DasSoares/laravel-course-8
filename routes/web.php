<?php

use App\Http\Controllers\{
    //Criei uma instancia para acessa-la mais facilmente
    PostController
};
use Illuminate\Support\Facades\Route;

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//Rota::tipo('caminho/id', ArquivoPostController, 'metodo')->nome para a rota buscar perfeitamente
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //padrao a ser usado

Route::get('/', function () {
    return view('welcome');
});
