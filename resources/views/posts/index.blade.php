
{{-- @extends('layouts.app')

@section('titulo')
    POSTS
@endsection

@section('content')
    <h1>A qui se muestran todo los post</h1>
@endsection --}}

<x-app-layout>
    <h1>A qui se muestran todo los post</h1>
    <a href="/posts/create">Crear Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

</x-app-layout>
