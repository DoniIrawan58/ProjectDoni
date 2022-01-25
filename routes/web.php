<?php
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home')); //8.1.1

Route::view('contact', 'contact');

Route::view('posts/first-post', 'posts.show');
Route::view('profile', 'profile');

    Route::get('about', function() {
        $name = "Doni";
        return view('about', [
           'name' => $name,
        ]);
});
