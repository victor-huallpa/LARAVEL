<x-app-layout>
    <a href="{{route('posts.index')}}">Volver a Post</a>

    {{-- @if ($errors->any())
     <div>
        <h2>error</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}    
                </li>
            @endforeach
        </ul>
     </div>
        
    @endif --}}

    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{route('posts.store')}}" method="post">
        
        @csrf
        
        <label>
        Titulo:
        <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')  
            <p>
                {{ $message }}
            </p>
        @enderror
        <br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        @error('slug')  
            <p> {{ $message }} </p>
        @enderror
        <br>
        <label >
            Categoria:
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        @error('category')  
            <p>
                {{ $message }}
            </p>
        @enderror
        <br>
        <br>
        <br>

        <label >
            Contenido:
            <textarea name="content">
                {{ old('content') }}
            </textarea>

        </label>

        @error('content')  
            <p>{{ $message }}</p>
        @enderror

        <br><br>
        <button type="submit">
            Crear Post
        </button>
    </form>
 
</x-app-layout>
