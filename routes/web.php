<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Sauqi Khatami'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'mengapa-manusia-lapar',
            'title' => 'Mengapa Manusia Lapar?',
            'author' => 'Sauqi Khatami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nihil,
            fugit exercitationem similique repellendus repudiandae distinctio nostrum ab vel corrupti nam,
            voluptatibus suscipit nobis! Quod aperiam vel quisquam repellat nulla'
        ],
        [
            'id' => 2,
            'title' => 'Mengapa Manusia Haus?',
            'slug' => 'mengapa-manusia-haus',
            'author' => 'Sauqi Khatami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatum fuga dicta at numquam repellat qui in labore quas, dolorum, atque perspiciatis ipsum,
            quisquam magni! Obcaecati unde et perferendis deleniti natus'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'mengapa-manusia-lapar',
            'title' => 'Mengapa Manusia Lapar?',
            'author' => 'Sauqi Khatami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, nihil,
            fugit exercitationem similique repellendus repudiandae distinctio nostrum ab vel corrupti nam,
            voluptatibus suscipit nobis! Quod aperiam vel quisquam repellat nulla'
        ],
        [
            'id' => 2,
            'title' => 'Mengapa Manusia Haus?',
            'slug' => 'mengapa-manusia-haus',
            'author' => 'Sauqi Khatami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatum fuga dicta at numquam repellat qui in labore quas, dolorum, atque perspiciatis ipsum,
            quisquam magni! Obcaecati unde et perferendis deleniti natus'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
