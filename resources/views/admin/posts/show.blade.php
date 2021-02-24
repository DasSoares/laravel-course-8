<h1>Detalhes do Post {{ $post->title }} </h1>

<ul>    
    <li> <strong>Titulo: </strong> {{ $post->title }}</li>
    <li> <strong>Conteúdo: </strong> {{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf {{-- sempre usar ele para verificação --}}
    <input type="hidden" name="_method" value="delete">
    <button type="submit">Deletar</button>
</form>