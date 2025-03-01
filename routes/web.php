<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class)
        ;

//->parameters(['articulos' => 'posts'])
// ->names('posts')
//->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'])
//->except('destroy')
//tipos de peticiones
#get es por url
#post es por formulario
// son peticiones con tareas especificas
#put es por formulario
#delete es por formulario
#patch es por formulario

Route::get('prueba', function(){

// crear nuevo registro
    // $post = new Post;

    // $post->title = 'mi primero titulo';
    // $post->content = 'Mi primero contenido';
    // $post->category = 'Mi primero categoria';
    // $post->published_at = now();

    // $post->save();

    // return $post;

// actualizar registro

    // busqueda mediante id
    // $post = Post::find(1);

    //busqueda mediante el campo que desees
    // $post = Post::where('title', 'Mi segundo titulo')->first();
    // $post->category = 'Categoria actualizada';
    // $post->save();

    // return $post;


// traer regsitros de la base de datos
    // $post = Post::find(1);
    // dd($post->is_active);


    /* 
    // $post = Post::all();

    // $post = Post::where('id', '>=','2')->get();


    $post = Post::orderBy('category', 'desc')
                    ->select('title', 'content')
                    ->where('id', '>=', '2')
                    ->get();


    return $post;
    */

// eliminar un registro

    // $post = Post::find(1);
    // $post->delete();

    // return 'Post eliminado';

});