<x-app-layout>
    <a href="{{route('posts.show',$post)}}">Volver al Post</a>

    <h1>Formulario para editar el post</h1>
    <form action="{{route('posts.update', $post)}}" method="post">
        
        @csrf
        @method('PUT')
        
        <label for="">
        Titulo:
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </label>
        @error('title')  
            <p>{{ $message }} </p>
        @enderror
        <br>
        <label for="">
            Slug:
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
        </label>
        @error('slug')  
            <p> {{ $message }} </p>
        @enderror
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">
        </label>
        @error('category')  
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">
                {{ old('content', $post->content) }}
            </textarea>

        </label>
        @error('content')  
            <p>{{ $message }}</p>
        @enderror

        <br><br>
        <button type="submit">
            Actualisar Post
        </button>
    </form>
 
</x-app-layout>
