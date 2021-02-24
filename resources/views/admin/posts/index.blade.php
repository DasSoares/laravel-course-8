<!-- chamando  -->
<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>

@if (session('message'))
{{-- Se existir, então exibe a mensagem --}}
{{ session('message') }};
    
@endif

<h1>Posts</h1>

@foreach ($posts as $post)
    <p>
        {{$post->title}} 
        - <a href="{{ route('posts.show', $post->id) }}">Detalhes</a> 
    </p>
@endforeach