<x-app-layout>
    <a href="{{route('posts.index')}}">Volver a Post</a>
    <h1>Titulo: {{ $post->title}}</h1>
    <p>
        <b>Categoria: </b>{{$post->category }}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="{{route('posts.edit', $post)}}">Editar Post</a>

    <form action="{{route('posts.destroy', $post)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar Post
        </button>
    </form>

</x-app-layout>
