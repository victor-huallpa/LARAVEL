<x-app-layout>
    <a href="/posts">Volver a Post</a>

    <h1>Formulario para crear un nuevo post</h1>
    <form action="/posts" method="post">
        
        @csrf
        
        <label for="">
        Titulo:
        <input type="text" name="title" id="title">
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
            Crear Psot
        </button>
    </form>
 
</x-app-layout>
