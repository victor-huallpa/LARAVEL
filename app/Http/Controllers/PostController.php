<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));    
    }

    //funcion para redirigir al usuario a la vista para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }

    //funcion para guardar el bueno post
    public function store(Request $request){
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->published_at = now();

        $post->save();

        return redirect('/posts');
        // return $request->all();
        // return request()->all();
    }

    //funcion para mostrar la lista de los titulos de los post
    public function show($post)
    {
        $post = Post::find($post);
        // return view('posts.show', [
        //     'post' => $post, 
        //     'category' => $category
        // ]);

        return view('posts.show', compact('post'));
    }

    //ruta par aver la vista de editar post
    public function edit($post){
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    // Actualizar post
    public function update(Request $request, $post){
        $post = Post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->published_at = now();
        $post->save();

        return redirect("/posts/{$post->id}");
        // return "Aqui se actualizara el {$post}";

    }

    //funcion para eliminar un post
    public function destroy($post){
        $post = Post::find($post);
        $post->delete();

        return redirect('/posts');

        // return "eliminando el Post {$post}"; 

    }
}
