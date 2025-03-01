
{{-- @extends('layouts.app')

@section('titulo')
    POSTS
@endsection

@section('content')
    <h1>A qui se muestran todo los post</h1>
@endsection --}}

<x-app-layout>
    <h1>A qui se muestran todo los post</h1>
    <a href="{{route('posts.create')}}">Crear Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}

</x-app-layout>
