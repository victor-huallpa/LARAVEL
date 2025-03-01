<x-app-layout>
    <a href="/posts">Volver a Post</a>
    <h1>Titulo: {{ $post->title.' Post: '}}</h1>
    <p>
        <b>Categoria: </b>{{$post->category }}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="/posts/{{$post->id}}/edit">Editar Post</a>

    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar Post
        </button>
    </form>

</x-app-layout>
