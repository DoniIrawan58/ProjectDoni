<?php
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home')); //8.1.1
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('profile', 'profile');
