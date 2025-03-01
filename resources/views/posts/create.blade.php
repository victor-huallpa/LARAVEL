<x-app-layout>
    <a href="{{route('posts.index')}}">Volver a Post</a>

    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{route('posts.store')}}" method="post">
        
        @csrf
        
        <label>
        Titulo:
        <input type="text" name="title">
        </label>
        <br>
        <label>
            Slug:
            <input type="text" name="slug">
        </label>
        <br>
        <label >
            Categoria:
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <br>

        <label >
            Contenido:
            <textarea name="content"></textarea>

        </label>

        <br><br>
        <button type="submit">
            Crear Post
        </button>
    </form>
 
</x-app-layout>
