<?php

use App\Http\Controllers\ImagePost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [ImagePost::class, 'index'])->name('home');
Route::post('/post', [ImagePost::class, 'store'])->name('store');
Route::post('/like-count', [ImagePost::class, 'like-count'])->name('like-count');