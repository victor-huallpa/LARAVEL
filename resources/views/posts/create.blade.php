<x-app-layout>
    <a href="{{route('posts.index')}}">Volver a Post</a>

    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{route('posts.store')}}" method="post">
        
        @csrf
        
        <label for="">
        Titulo:
        <input type="text" name="title" id="title">
        </label>
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug" id="slug">
        </label>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" id="category">
        </label>
        <br>
        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content"></textarea>

        </label>

        <br><br>
        <button type="submit">
            Crear Post
        </button>
    </form>
 
</x-app-layout>
