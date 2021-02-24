<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // vai acessar aqui o metodo index
    public function index(){
        // retornando uma view
        // 'resources\views' caminho das views, onde ficam as paginas do laravel
        // index.blade.php o blade é a extensão do Laravel

        $posts = Post::get();

        //dd($posts);

        return view('admin/posts/index', compact('posts'));
    }

    public function create(){
        return view('admin/posts/create');
    }

    public function store(StoreUpdatePost $request){ // injetaremos a StoreUpdatePost
        // dados do formulário
        //dd($request->all()); // ou $request->title o nome 'name' do input
        Post::create($request->all());

        return redirect()->route('posts.index');
        /*
            sempre usar nome das rotas, porque se mudar a localização do arquivo 
            pode dar erros e ter que trocar manualmente de novo em todo lugar que tiver chamada
            de route('');
        */
    }

    public function show($id){
        /* $post = Post::where('id', $id)->first(); */ // pode fazer assim 
        //$post = POst::find($id); // ou assim
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }

        return view('admin/posts/show', compact('post'));
    }

    public function destroy($id){
        if(!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }        

        $post->delete();
        return redirect()->route('posts.index')->with('message','Post deletado com sucesso');
    }
}
