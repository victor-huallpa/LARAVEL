<x-app-layout>
    <a href="{{route('posts.show',$post)}}">Volver al Post</a>

    <h1>Formulario para editar el post</h1>
    <form action="{{route('posts.update', $post)}}" method="post">
        
        @csrf
        @method('PUT')
        
        <label for="">
        Titulo:
        <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug" value="{{ $post->slug }}">
        </label>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" id="category" value="{{ $post->category }}">
        </label>
        <br>
        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">
                {{ $post->content }}
            </textarea>

        </label>

        <br><br>
        <button type="submit">
            Actualisar Post
        </button>
    </form>
 
</x-app-layout>
