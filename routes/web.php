<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Anin Deninadia',
        'title' => 'About'
    ]);
});

Route::get('/posts', function (Post $post) {

    $posts = Post::latest();

    if (request('search')) {
        $posts = $posts->where('title', 'like', '%' . request('search') . '%');
    }
    

    $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Anin Deninadia',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda nostrum voluptatibus id tempora aspernatur quibusdam, numquam commodi nemo animi ullam.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Anin Deninadia',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa reiciendis laboriosam cum doloremque veritatis veniam.'
        ],
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]); 
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts->load('category', 'author');

    return view('posts', [
        'title' => count($posts) . ' Articles by ' . $user->name, 
        'posts' => $posts
    ]);
});


Route::get('/posts/{id}', function ($slug) {

    $post = Arr::first(Post::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    $post = Post::latest()->get();
    return view('post', ['title' => 'Single Post', 'post' => $post]);
   
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts', function (){
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});