<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));    
    }

    //funcion para redirigir al usuario a la vista para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }

    //funcion para guardar el nuevo post
    public function store(Request $request){
        //validar datos o campos
        $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ]);
        //asignacion masiva
        Post::create($request->all());
        // $post = new Post();

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->category = $request->category;
        // $post->content = $request->content;
        // $post->published_at = now();

        // $post->save();

        return redirect()->route('posts.index');
        // return $request->all();
        // return request()->all();
    }

    //funcion para mostrar la lista de los titulos de los post
    public function show(Post $post)
    {

        //si se agrega Post en los parametros ya no requiero ahcer la busqueda
        //yaque se realiza automaticamente
        // $post = Post::find($post);


        // return view('posts.show', [
        //     'post' => $post, 
        //     'category' => $category
        // ]);

        return view('posts.show', compact('post'));
    }

    //ruta par aver la vista de editar post
    public function edit(Post $post){
        // $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    // Actualizar post
    public function update(Request $request,Post $post){
        // $post = Post::find($post);
        $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required',
        ]);
        $post->update($request->all());

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->category = $request->category;
        // $post->content = $request->content;
        // $post->published_at = now();
        // $post->save();

        return redirect()->route('posts.show', $post);
        // return "Aqui se actualizara el {$post}";

    }

    //funcion para eliminar un post
    public function destroy(Post $post){
        // $post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');

        // return "eliminando el Post {$post}"; 

    }
}
